<?php
	session_start();
?>

<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>Log In | EngineeringConnect</title>
	</head>
	<body>
		<div id="Header" class="row"> <!-- Header with Logo and/or Company Name -->
			<div class="col-md-12">
				<h1 id="Logo" class="bg-primary">EngineeringConnect</h1>
			</div>
		</div>

		<div class="navbar navbar-inverse"> <!-- Navigation Bar with buttons and links -->
			<ul class="nav navbar-nav"> <!-- Left Side -->
				<li><a href="index.php"><b>Home</b></a></li>
				<li><a href="projects.php"><b>Projects</b></a></li>
				<li><a href="services.php"><b>Services</b></a></li>
				<li><a href="contact.php"><b>Contact</b></a></li>
				<li><a href="submit.php"><b>Submit your project</b></a></li>
				<li><a href="select.php"><b>Select project</b></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right"> <!-- Right Side -->
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
				<li class="active"><a href="login.php"><span class="glyphicon glyphicon-user"></span> <b>Login</b></a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span><b>Logout</b></a></li>
			</ul>
		</div>

		<div id="acc_status" class="panel panel-primary"> <!-- Account Status -->
			<div class="panel-heading"><h4>Account Status</h4></div>
			<div class="panel-body">
				<?php
					//echo "Hello World";

					if (isset($_SESSION['uid']))
					{
						echo "Welcome " . $_SESSION['email'];
					}
					else
					{
						echo "You are not logged in.";
					}
				?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel-primary">
					<div class="panel-heading"><h4>Log In</h4></div>
					<div class="panel-body">
						<form action="login_db.php" method="POST">
							<div class="form-group">
								<label for="email-address">E-Mail Address</label>
								<input type="email" class="form-control" id="email-address" name="email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="pwd">
							</div>
							<button type="submit" name="submit" class="btn btn-primary" style="width: 100%">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>