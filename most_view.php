<?php
session_start();
include 'header.php';
?>
<html>
<head>
<title>Most Viewed Events</title>
</head>
<body>
<div class="container">
<h3>Most Viewed Events</h3>
<?php 
$dbc = mysqli_connect("cmpe272.c7heilvdo1fe.us-east-1.rds.amazonaws.com:3306", "root", "bsrihari09", "cmpe272");
$eventQuery = "select * from event";
$result = mysqli_query($dbc, $eventQuery);
$event_array;
if(! empty($result)){
    $index = 0;
    while ($row = $result->fetch_assoc()){
        $eventid = $row['eventid'];
        $description = $row['description'];
        $eventname = $row['name'];
        if(isset($_COOKIE[$eventid])){
            $crow = json_decode($_COOKIE[$eventid],true);
           /*  $event_array[$index]["event"] = $eventid;
            $event_array[$index]["time"] = $crow[0];
            $event_array[$index]["visits"] = $crow[1]; */
            $event_array[$index] = array('eventid'=>$eventid,'last_visit'=>$crow[0],'visits'=> $crow[1],'name'=>$eventname,'desc'=>$description);
        }else{
           /*  $event_array[$index]["event"] = $eventid;
            $event_array[$index]["time"] = 0;
            $event_array[$index]["visits"] = 0; */
            $event_array[$index] = array('eventid'=>$eventid,'last_visit'=>"0",'visits'=> 0,'name'=>$eventname,'desc'=>$description);
            
        }
    $index++;
    }
   // print_r($event_array);
    
    function val_sort($array,$key){
        foreach ($array as $k=>$v){
            $b[]=$v[$key];
        }
       // print_r($b);
        arsort($b);
        echo "<br><br>";
        
        foreach ($b as $k=>$v){
            $c[] = $array[$k];
        }
        return $c;
    }
    $sorted = val_sort($event_array, 'visits');
  //  print_r($sorted);
}

if(!empty($sorted)){
    foreach ($sorted as $ind =>$v){
        ?>
                <div class="panel panel-default ">
        <div class="panel-heading">
        <h3 class="panel-title"><?php echo $v['name'];?></h3>
        <h6>
       	<span class="label label-info">View Count:</span><?php echo $v['visits'];?>
       	</h6>
        </div>
        <div class="panel-body">
        <?php echo $v['desc'];?><br>
        <a href="event.php?eventid=<?php echo $v['eventid'];?>" class="btn btn-xs btn-default">More Details</a>
        </div>
        </div>
<?php         
    }
    }





?>
</div>

</body>
</html>