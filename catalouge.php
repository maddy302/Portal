<html>
<?php
session_start();
include 'header.php';
?>
<head>
<title>Catalouge</title>
</head>
<body>
	<div class="container">
		<h3>Catalouge</h3>
		<h6><a href="recently_view.php" class="btn btn-xs btn-info">Recently Viewed</a>
		<a href="most_view.php" class="btn btn-xs btn-info">Most Viewed</a>
		</h6>
		
<?php
$dbc = mysqli_connect("cmpe272.c7heilvdo1fe.us-east-1.rds.amazonaws.com:3306", "root", "bsrihari09", "cmpe272");
$select_events = "select * from event";
$result = mysqli_query($dbc, $select_events);
$length = "2";
if (! empty($result)) {
    while ($row = $result->fetch_assoc()) {
        $eventid = $row['eventid'];
        $event_name = $row['name'];
        $event_description = $row['description'];
        $event_type = $row['eventtype'];
        $event_venue = $row['places'];
        $event_duration = $row['duration'];
        ?>
        <div class="col-sm-4">
        <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title"><?php echo "$event_name";?></h3>
        </div>
        <div class="panel-body">
        <?php echo "$event_description";?><br>
        <a href="event.php?eventid=<?php echo "$eventid";?>" class="btn btn-xs btn-default">More Details</a>
        </div>
        </div>
        </div>
<?php
    }
}
mysqli_close($dbc);

?>

</div>
</body>
</html>