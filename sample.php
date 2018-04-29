<!DOCTYPE html>
<html>
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
<body>
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-right-align w3-large">
 <!--    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i>Menu</a> -->
<a href="#" class="w3-bar-item w3-button w3-theme-l1">Event Portal</a>
<a href="#" class="w3-bar-item w3-right w3-button w3-theme-l1">Menu</a>
<a href="#" class="w3-bar-item w3-right w3-button w3-theme-l1">Contact</a>
<a href="#" class="w3-bar-item w3-right w3-button w3-theme-l1">Support</a>
<a href="#" class="w3-bar-item w3-right w3-button w3-theme-l1">About</a>
<a href="#" class="w3-bar-item w3-right w3-button w3-theme-l1">Catalogue</a>

</div>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
</nav>
</div>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


</body>

</head>
</html>
