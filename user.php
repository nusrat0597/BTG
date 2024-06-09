<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>

<?php
include 'dbcon.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}
?>
<body>

<div class="container">
    <div class="content">
     <h3>hi, <span> user </span></h3>
     <h1> Welcome <span><?php echo $_SESSION['user_name'];?></span></h1>
     <p>This is an user page</p>

     <a href="login.php" class="btn">Login</a>
     <a href="signup.php" class="btn">Registration</a>
     <a href="logout.php" class="btn">Logout</a>


</div>
</div>
    
</body>
</html>