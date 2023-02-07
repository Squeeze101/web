<?php
@include 'config.php';

session_start();


if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $password = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);

   $select = "SELECT * from users where username=$username";
   $result = mysqli_query($conn,$select);

   if($result){
      $error[]='username tidak ada!';
   }

   elseif($password!=$cpassword){
      $error[]= 'password tidak sama!';
   }

   else{
      $insert = "UPDATE users SET password = '$password' where username = '$username'";
      $result = mysqli_query($conn,$insert);
      header ('location:login_form.php');
   }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>Forget Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter new password">
      <input type="password" name="cpassword" required placeholder="enter password again">
      <input type="submit" name="submit" value="Update" class="form-btn">
      <p>Belum Punya Akun? <a href="register_form.php">Daftar!</a></p>
   </form>

</div>
    
</body>
</html>