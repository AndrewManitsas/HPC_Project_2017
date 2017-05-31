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

		<!-- JavaScript Library from Google for the embedded map -->
		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

		<title>Contact | EngineeringConnect</title>
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
				<li class="active"><a href="select.php"><b>Select project</b></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right"> <!-- Right Side -->
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <b>Login</b></a></li>
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
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Select Project</h4></div>
					<div class="panel-body">
						<table border="1">
                            <tr>
                                <th>ID</th>
                                <th>Project Title</th>
                                <th>Speciality</th>
                                <th>Customer Name</th>
                                <th>Cost</th>
                            </tr>
                            <tr>   
                                <td>00128</td>
                                <td>Road Network</td>
                                <td>Civil Engineer</td>
                                <td>James Brown</td>
                                <td>1000000</td>
                            </tr>
                            <tr>
                                <td>45889</td>
                                <td>Road Lighting</td>
                                <td>Electrical Engineer</td>
                                <td>Michael Jackson</td>
                                <td>520400</td>
                            </tr>
                            <tr>
                                <td>77414</td>
                                <td>Library Heating</td>
                                <td>Mechanical Engineer</td>
                                <td>Rihanna</td>
                                <td>120000</td>
                            </tr>
                        </table>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>