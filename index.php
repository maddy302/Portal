<html>
<?php 
session_start();
include 'header.php';?>
<head>
<title>Event Registration Portal</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/portal.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>

</head>
<body>
<div class="container">
<br>
<br>
<h1>Welcome to Event Portal</h1>
<?php 
if(!isset($_SESSION["user_id"])){?>
<a href="register.php" class="btn btn-primary btn-lg">Register</a>
<a href="login.php" class="btn btn-primary btn-lg btn-success">Login</a>
<?php } else {
  
}
    ?>
</div>
</body>
</html>