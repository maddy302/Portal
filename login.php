<html>
<?php include 'header.php';?>
<head>
<title>Register Page</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
					<h1>Login</h1>
					</div>
					<br>
					<br>
					<div class="card-body">
						<form method="POST" action="home.php">
							<div class="form-group row">
								<label for="email" class="col-sm-4 col-form-label text-md-right">Email address</label>

								<div class="col-md-6">
									<input id="email" type="email"
										class="form-control"
										name="email" value="" required autofocus>
										</div>
										</div>
<div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Login
                                </button>

                                <a class="btn btn-link" href="#">
                                    Forgot Password
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>