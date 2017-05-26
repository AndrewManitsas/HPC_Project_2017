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
				<li><a href="index.html"><b>Home</b></a></li>
				<li><a href="projects.html"><b>Projects</b></a></li>
				<li><a href="services.html"><b>Services</b></a></li>
				<li><a href="contact.html"><b>Contact</b></a></li>
				<li><a href="submit.html"><b>Submit your project</b></a></li>
				<li><a href="select.html"><b>Select project</b></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right"> <!-- Right Side -->
				<li><a href="register.html"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
				<li class="active"><a href="login.html"><span class="glyphicon glyphicon-user"></span> <b>Login</b></a></li>
			</ul>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel-primary">
					<div class="panel-heading"><h4>Log In</h4></div>
					<div class="panel-body">
						<?php
                            $server_name = "localhost";
                            $username = "ip_database_handler";
                            $password = "bio7720";
                            $dbName = "engineering_connect";

                            //Create connection
                            $connect = mysqli_connect($server_name, $username, $password, $dbName);

                            //Chech if connection is live
                            if (!$connect)
                            {
                                die("Connection Failed: " . mysqli_connect_error());
                            }
                            else
                            {
                                echo "Successfull Connection<br>";
                            }

                            $email = $_POST["email"];
                            $pwd = $_POST["pwd"];
                            $sql = "SELECT * FROM users WHERE E-Mail = '$email' AND Password = '$pwd'";
                            $result = mysqli_query($connect, $sql);

                            if (mysqli_num_rows($result) > 0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "Matching account:" . "<br>";
                                    echo "UID: " . $row["UID"] . " --- E-Mail: " . $row["E-Mail"] . " --- Password: " . $row["Password"] . " --- Name: " . $row["Name"] . " --- Surname: " . $row["Surname"] . " --- Speciality: " . $row["Speciality"] . "<br>";
                                }
                            }
                            else
                            {
                                echo "0 results" . "<br>";
                                echo "No matching account";
                            }

                            mysqli_close($connect);
                    	?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>