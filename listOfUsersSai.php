<?php
//include 'header.php';
$ch = curl_init();
echo '<span>To go back to Users page <a href="userList.php">  Click Here</a> </span>';
//curl_setopt($ch, CURLOPT_URL, "http://cmpe272-env.yyviuip2yn.us-east-1.elasticbeanstalk.com/userList.php");
curl_setopt($ch, CURLOPT_URL, "http://cmpe272.com/getUsers.php");
//curl_setopt($ch, CURLOPT_POST, 1);
curl_exec ($ch);
curl_close($ch);


?>