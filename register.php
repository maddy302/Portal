<html>
<?php 
session_start();
include 'header.php';?>
<head>
<title>Register Page</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h3>Register Page</h3>
					</div>

					<div class="card-body">


						<form action="registerStatus.php" method="post">
							<div class="form-group row">
								<label for="firstName"
									class="col-md-4 col-form-label text-md-right">First Name</label>
								<div class="col-md-6">

									<input type="text" class="form-control" id="firstName" name="firstName" value="" required />
								</div>
							</div>
							<div class="form-group row">
								<label for="lastName"
									class="col-md-4 col-form-label text-md-right">Last Name</label>
								<div class="col-md-6">

									<input type="text" class="form-control" id="lastName" name="lastName" value="" required/>
								</div>
							</div>
							<div class="form-group row">
								<label for="userId"
									class="col-md-4 col-form-label text-md-right">Email Id</label>
								<div class="col-md-6">

									<input type="text" class="form-control"  id="emailId" name="emailId" value=""  required/>
								</div>
							</div>
							<div class="form-group row">
								<label for="password"
									class="col-md-4 col-form-label text-md-right">Password</label>
								<div class="col-md-6">

									<input type="password" class="form-control"  id="password" name="password" value="" required />
								</div>
							</div>
							<div class="form-group row">
								<label for="password-confirm"
									class="col-md-4 col-form-label text-md-right">Confirm Password</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password"
										class="form-control" name="password-confirm" required>
								</div>
							</div>
							<div class="form-group row">
								<label for="userId"
									class="col-md-4 col-form-label text-md-right">Address</label>
								<div class="col-md-6">

									<input type="text" class="form-control"  id="address" name="address" value="" maxlength=50 required/>
								</div>
							</div>
							<div class="form-group row">
								<label for="userId"
									class="col-md-4 col-form-label text-md-right">Phone</label>
								<div class="col-md-6">

									<input type="text" class="form-control"  id="phone" name="phone" value="" maxlength="10" required/>
								</div>
							</div>
							<div class="form-group row">
								<label for="userId"
									class="col-md-4 col-form-label text-md-right">Home Phone</label>
								<div class="col-md-6">

									<input type="text" class="form-control"  id="home_phone" name="home_phone" value="" maxlength=10 />
								</div>
							</div>
							<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                 Register
                                </button>
                            </div>
                        </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<!--  <?php 
$error;
$i=0;
$name = $_POST['firstName'].$_POST['lastname'];
$email = $_POST['emailId'];
$password=$_POST['password'];
$cPassword = $_POST['password-confirm'];
if($password!=$cPassword){
    $error[$i] = "Password and Confirm Password don't match";
$i++;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    $errror[$i] = "Incorrect Email ID";
}
if(array_count_values($error)>0){
    
}


?>  -->