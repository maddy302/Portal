<!DOCTYPE html>
<html>
<head>
<?php //session_start();?>
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
<div class="navbar navbar-inverse">
  <div class="container">
  <div class="navbar-header">
<!--  <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i>Menu</a>
 -->
             <ul class="nav navbar-nav">
<li><a href="index.php" >Event Portal</a></li>
<?php 
if(isset($_SESSION["user_id"])){
if(!empty($_SESSION["user_name"])){?>
<li><a href="home.php" >Home</a></li>
<?php }}?>
<li><a href="contact.php" >Contact</a></li>
<li><a href="underConstruction.php" >News</a></li>
<li><a href="about.php" >About</a></li>
<li><a href="catalouge.php">Catalogue</a></li>
<li class="nav-item dropdown show">
<a href="#" >DropDown</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

</li>
<?php 
if(isset($_SESSION["user_id"])){
if(!empty($_SESSION["user_name"])){
    echo "<li><a href='userList.php'>User List</a></li>";
    echo "<li><a href='logout.php'>LogOut</a></li>";
}
}
?>
 <!-- <li><a href="logout.php">LogOut</a></li> -->
 </ul>
</div>
</div>
</div>
</body>

</html>