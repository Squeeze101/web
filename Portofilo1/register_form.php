<?php

@include 'config.php';

function function_alert($message) {
      
   // Display the alert box 
   echo "<script>alert('$message');</script>";
}

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $name=strtoupper($name); 
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $handphone = mysqli_real_escape_string($conn, $_POST['handphone']);

   $select = " SELECT * FROM users WHERE email = '$email' || username = '$username' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';
      
   }

   
   else{

      if($pass != $cpass){
         function_alert("Password tidak sama");

      }

      elseif(strlen($username)>20){
         $error[]= 'username tidak lebih dari 20 karakter';
    
       }

      else{
         $insert = "INSERT INTO users VALUES('$id','$username','$name','$email','$pass','$handphone','$user_type')";
         mysqli_query($conn, $insert);
         
         header('location:login_form.php');

      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script> 
   function displayMessage()
{
alert("password tidak sama");
}
function displayLogin()
{
alert("password tidak sama");
}
   </script>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Daftar</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="text" name="username" required placeholder="enter your username">
      <input type="email" name="email" required placeholder="enter your email">  
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="text" name="handphone" required placeholder="enter your handpone">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Sudah Memiliki Akun? <a href="login_form.php">Masuk</a></p>
   </form>

</div>

</body>
</html>