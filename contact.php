<html>
<?php 
session_start();
include 'header.php';?>
<head>
<title>Event Registration Portal</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/portal.css">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5, h6 {
	font-family: "Roboto", sans-serif;
}

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
		
			<h3>Contact Details</h3>

			
			
			
      <?php
    $contactList = file("file/contact.txt");
    foreach ($contactList as $line) {
        $line = str_replace(";", "<br>", $line);
        //$line = str_replace("=", "&emsp; &emsp; &emsp; &emsp;", $line);
        $line = explode("=", $line);
/*         echo "<td>";
       
        echo str_pad($line[0], 10);
        echo "</td>"; */
        echo "<td>";
        echo $line[1];
        echo "</td>";
    }
    ?>


		</div>

</body>
</html>