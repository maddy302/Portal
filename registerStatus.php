<html>
<?php 
session_start();
include 'header.php';?>
<head>
<title>Register Page</title>
</head>
<body>
<?php 
$error=array();
$i=0;
$name = $_POST['firstName'].$_POST['lastName'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['emailId'];
$password=$_POST['password'];
$cPassword = $_POST['password-confirm'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$home_phone = $_POST['home_phone'];
$regex_phone = '/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i';
//echo $name.$email.$password;
if($password!=$cPassword){
    $error[$i] = "Password and Confirm Password don't match";
    $i++;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    $error[$i] = "Incorrect Email ID";
    $i++;
}
if(!preg_match($regex_phone,$phone)){
    $error[$i] = "Wrong Phone Number format";
    $i++;
}
if(!empty($home_phone)){
    if(!preg_match($regex_phone,$home_phone)){
        $error[$i] = "Wrong Home Phone Number format";
        $i++;
    }
}



?>
<div class="container">
 <?php 

if($error!=null && array_count_values($error)>0){
    echo '<p><a href="register.php" class="btn" >Go Back</a></p>';
    echo '<ul>';
    foreach ($error as $suberr) {
        
        echo '<li>'.$suberr.'<br>'.'</li>';
    }
    echo '</ul>';
   
}
else{
   /*  $authFile = fopen("file/auth.txt", "a") or die( "Unable to open the file");
    $authInfo = $email.','.$password.','.$name."\n";
    fwrite($authFile, $authInfo);
    fclose($authFile); */
    $dbc = mysqli_connect("cmpe272.c7heilvdo1fe.us-east-1.rds.amazonaws.com:3306", "root", "bsrihari09", "cmpe272")
    or die("Error Connecting to SQL Database");
    $get_id = "select max(id) + 1 as id from visitor";
    $idMax = mysqli_query($dbc,$get_id);
    if($row = $idMax->fetch_assoc()){
        $id = $row["id"];
    }
    $insert_user = "insert into visitor (id,username,password,first_name,last_name,email_address,
phone_number, home_phone,address) values ('$id','$email','$password','$first_name','$last_name',
'$email','$phone','$home_phone','$address')";
    
    $result = mysqli_query($dbc,$insert_user);
    if($result==false){
        printf("error: %s\n", mysqli_error($dbc));
    }else {
        
        echo "User registered Successfully\n";
        if(!isset($_SESSION['user_id']))
        echo '<p><a href="login.php" class="btn" >Login</a></p>';
    }
    
    mysqli_close($dbc);
    
}
?>
</div>
</body>
</html>