<?php

session_start();

include 'config.php';

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');

   
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <p>Profile</p>   
<?php
   $loggedin_id=$_SESSION['user_name'];
   $sql="SELECT * FROM users where username='$loggedin_id'";
   $result=mysqli_query($conn,$sql);
   
   while($rows=mysqli_fetch_array($result)){
   
      echo "Username:{$rows['username']}  <br> ".
      "NAMA : {$rows['nama']} <br> ".
      "Email : {$rows['email']} <br> ".
      "Password : {$rows['password']}<br>".
      "Telepon : {$rows['handphone']}<br>".
      "Type User  : {$rows['user_type']}<br>";
   
   }

?>
      
      <a href="logout.php" class="btn">logout</a>
      <a href="index.php" class="btn">home</a>
      <a href="update_profile.php" class="btn">Edit Profile</a>
   </div>

</div>

</body>
</html>