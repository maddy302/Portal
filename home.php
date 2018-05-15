<html>
<?php
session_start();
$login = false;
if (isset($_POST['email'])){
$uId = $_POST['email'];
$pwd = $_POST['password'];
$authFile = "file/auth.txt";
/* $file = fopen($authFile, "r") or die("Error opening the file");
 $fileData = fread($file, filesize($authFile)); */

/* $fileData = file($authFile);
 foreach ($fileData as $line){
 $line = explode(',', $line);
 */   // echo $line[0];
// echo $line[1];
/*  if($line[0]==$uId && $line[1]==$pwd){
 $uName = $line[2];
 $login = true;
 */     /* $_SESSION("userId",$uId);
 $_SESSION("uName",$uName);
 $_SESSION("isLogin",$login);
 */
//break;
/* }
 } */
//fclose($file);
$dbc = mysqli_connect();
$query = "select id, username, first_name, last_name, email_address, phone_number,home_phone, address, is_admin
from visitor where username = '$uId' and password='$pwd'";
$result = mysqli_query($dbc, $query);
if($result->num_rows >0 ){
    $login = true;
    //if(!isset($_SESSION))
    
    while ($row=$result->fetch_assoc()){
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_email"] = $row["email_address"];
        $_SESSION["user_address"] = $row["address"];
        $_SESSION["user_name"] = $row["first_name"]." ".$row["last_name"];
        $_SESSION["user_phone"] = $row["phone_number"];
        $_SESSION["user_home_phone"] = $row["home_phone"];
        $_SESSION["user_is_admin"] = $row["is_admin"];
    }
}
else{
    $login = false;
    session_destroy();
}
}?>
<?php include 'header.php';?>
<head>
<title>Home Page</title>
</head>
<body>
<?php 
//session_start();

if($login ||isset($_SESSION["user_id"])){
    echo "<div class='Container'> <h2>User Detail</h2>
Welcome ".$_SESSION["user_name"].".    You are in the home Page <br><br>";
echo "Email Address: ".$_SESSION["user_email"]."<br>Address: ".$_SESSION["user_address"]."<br>";
echo "Phone Number: ".$_SESSION["user_phone"];

}else{
   // echo "<script> location.href='login.php'; </script>";
    //exit;
    echo "Sry";
    session_destroy();
}

?>


</div>
</body>
</html>
