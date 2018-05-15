<?php
$query_where = "select * from visitor where 1=1";
if(isset($_GET['search_user_name'])||isset($_GET['search_email'])||isset($_GET['search_phone'])){
$search_user_name = $_GET['search_user_name'];
$search_email = $_GET['search_email'];
$search_phone = $_GET['search_phone'];
$where_clause = "";
//$query = "select * from visitor";

if(!empty($search_user_name)){
    $query_where = $query_where." and first_name like '%$search_user_name%'"; 
}
if(!empty($search_email)){
    $query_where = $query_where." and email_address like '%$search_email%'"; 
}
if(!empty($search_phone)){
    $query_where = $query_where." and phone_number like '%$search_phone%'";
}

}
?>
<html>
<head>
<title>List of Users</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </head>
<body>
<!-- <div class="container">
<h3>Search User By</h3>
<div class="card-body">
<form method="GET" action="">
<div class="form-group row">
<label for="search_user_name" >Name</label>
<input id="search_user_name" type="text" name="search_user_name" value="" autofocus><br>									
<label for="search_email" >Email</label>
<input id="search_email" type="email" name="search_email" value="" /><br>									
<label for="search_phone" >Phone Number</label>
<input id="search_phone" type="text" name="search_phone" value="" /><br>	
<button type="submit" >Search</button>
</div>
</form>
</div>
<table class="table"></table>
</div> -->

<div class="col-md-6">
<table class="table table-striped">
<thead>
<h2>Users from Madhukar's website</h2>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Phone Number</th>
</tr>
</thead>
<tbody>
<?php
//if(isset($_GET['search_user_name'])||isset($_GET['search_email'])||isset($_GET['search_phone'])){
if(true){
//$dbc = mysqli_connect("localhost:3306", "root", "bsrihari09", "cmpe272");
$dbc = mysqli_connect();
$query_where = $query_where." order by id";
$result = mysqli_query($dbc, $query_where);
$i = "0";
if(!empty($result)){
    while ($row =$result->fetch_assoc()){
$id = $row["id"];
$first_name = $row["first_name"];
$last_name = $row["last_name"];
$phone_number = $row["phone_number"];
$email_address= $row["email_address"];
?>
<tr>
<td><?php echo "$id";?></td>
<td><?php echo "$first_name";?></td>
<td><?php echo "$last_name";?></td>
<td><?php echo "$email_address";?></td>
<td><?php echo "$phone_number";?></td>
</tr>
<?php }}
else{
    echo "<tr><td> No Results found.</td></tr>";
}
mysqli_close($dbc);
}
?>
</tbody>
</table>
<!-- <a href="register.php" class="btn btn-xs btn-default">Register/Insert User</a> -->
</div>
</body>
</html>
