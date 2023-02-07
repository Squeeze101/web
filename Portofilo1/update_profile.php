<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_name'];

if(isset($_POST['update_profile'])){

   $update_hp = mysqli_real_escape_string($conn, $_POST['update-hp']);
   $username = $_SESSION['user_name'];
   $insert= mysqli_query($conn, "UPDATE `users` SET handphone = '$update_hp' WHERE username = '$username'") or die('query failed');
   
      if($insert){
         echo "<script> alert ('Nomor Hp Berhasil  diganti');</script>";
      }
      else{
         echo "<script> alert ('Nomor Hp Gagal diganti');</script>";
      }

   }





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style_profile.css">

</head>
<body>
   
<div class="update-profile">



   <form action="" method="post" enctype="multipart/form-data">

   <?php
      $loggedin_id=$_SESSION['user_name'];
   $sql="SELECT * FROM users where username='$loggedin_id'";
   $result=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($result)){
      echo "<h1>PROFILE </h1>";
      echo "<div class='flex'>";
      echo "<div class='inputBox'>";
      echo "<span>Username :</span>";
      echo "<input name='username' type='text' class='box' value='{$rows['username']}'>";
      echo "<span>Nama :</span>";
      echo "<input type='text' class='box' value='{$rows['nama']}'>";
      echo "<span>Email :</span>";
      echo "<input type='text' class='box' value='{$rows['email']}'";
      echo "</div>";
      echo "<div class='inputBox'>";
      echo "<h4>password :</h4>";
      echo "<input type='text' class='box' value='{$rows['password']}'";
      echo "<span>Handphone :(editable)</span>";
      echo "<input name='update-hp' type='text' class='box' value='{$rows['handphone']}'";
      echo "<span>User Type:</span>";
      echo "<input type='text' class='box' value='{$rows['user_type']}'";

      echo "</div>";
      echo "</div>";
   }

   ?>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="index.php" class="delete-btn">go back</a>
   </form>

</div>

</body>
</html>