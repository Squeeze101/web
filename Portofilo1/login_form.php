<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password1']);

   $select = " SELECT * FROM users WHERE (email = '$username' OR username = '$username') and password = '$pass'   ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
      
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script>
          function checkPassword(form) {
        
        password1 = form.password1.value;
        password2 = form.password2.value;
        username = form.username.value;

        if(username == ''){
         alert("Please enter Username")
        }
        // If password not entered
        else if (password1 == '')
            alert ("Please enter Password");
            
        // If confirm password not entered
        else if (password2 == '')
            alert ("Please enter confirm password");
            
        // If Not same return False.    
        else if (password1 != password2) {
            alert ("\nPassword did not match: Please try again...")
            return false;
        }

        // If same return True.
        else{
            alert("Password Match: Welcome to web!")
            return true;
        }
    }
   </script>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" onSubmit = "return checkPassword(this)">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text"  name="username" placeholder="enter your email or username">
      <input type="password" name="password1"  placeholder="enter your password">
      <input type="password" name="password2"  placeholder="enter your password again">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p>Lupa Password? <a href="forget_password.php">Lupa Password</a></p>
   </form>

</div>

</body>
</html>