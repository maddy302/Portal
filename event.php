<?php

session_start();
include 'header.php';
?>
<html>
<head>
<title>
Event Page
</title>
</head>

<body>
<div class="container">
<?php 
$dbc = mysqli_connect();
$eventid = $_GET['eventid'];
$select_event = "select * from event where eventid='$eventid'";
$result = mysqli_query($dbc, $select_event);
$view_time = time();
if(isset($_COOKIE[$eventid])){
    $crow = json_decode($_COOKIE[$eventid],true);
    $crow[1] = $crow[1]+1;
    $crow[0] = $view_time;
    setcookie($eventid,json_encode($crow),time()+86400);
}else{
    $view_count = 1;
    $crow[0] = $view_time;
    $crow[1] = $view_count;
    setcookie($eventid,json_encode($crow),time() + 86400);
}
if(!empty($result)){
    while ($row = $result->fetch_assoc()){
        $event_name = $row['name'];
        $event_desc = $row['description'];
        $event_type = $row['eventtype'];
        $venue = $row['places'];
        $duration = $row['duration'];
    
?>
<div class="panel panel-default">
<div class="panel-heading">
        <h2 class="panel-title"><?php echo "$event_name";?></h2>
        </div>
        <div class="panel-body">
      <!--   <img alt=<?php echo "$eventid";?> class="img-thumbnail" src=img/1001.jpg data-holder-rendered="true" style="width:200px; height:200px"> -->
		<img alt=<?php echo "$eventid";?> class="img-thumbnail img-responsive" src=img/<?php echo "$eventid".".jpg";?>
		 data-holder-rendered="true" style="width:200px; height:200px">      
		<div class="well">
        <?php echo "$event_type";?><br>
        <?php echo "$event_desc";?><br>
        <?php echo "$venue";?><br>
        <?php echo "$duration";?><br>
        </div>
       	<h6>
       	<span class="label label-info">View Count:</span><?php echo "$crow[1]";?>
       	</h6>
        </div>
</div>
<a href="catalouge.php" class="btn btn-xs btn-default">Go Back</a>
<?php }
}
mysqli_close($dbc);
?>
</div>
</body>
</html>
