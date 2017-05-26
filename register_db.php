<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>Register | EngineeringConnect</title>
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
				<li class="active"><a href="register.html"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>
				<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> <b>Login</b></a></li>
			</ul>
		</div>

		<div class="row"> <!-- Dual panel with "why register" text and register form -->
			<div class="col-md-6"> <!-- Left side with "why register" text -->
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Why register?</h4></div>
					<div class="panel-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Curabitur nec lorem ac mi consequat auctor id auctor mauris.
							Pellentesque molestie maximus lectus ut dignissim.
							Aliquam ut odio ac libero euismod fringilla nec et lacus.
							Donec tellus purus, volutpat quis leo non, malesuada scelerisque felis.
							Donec facilisis vestibulum tempor. Donec vel tristique magna.
							In orci odio, hendrerit eget posuere cursus, consectetur vel elit.
							Sed ultricies diam quam, et consequat ipsum fringilla vitae.
						</p>
						<p>
							Pellentesque viverra id lectus tincidunt malesuada.
							Aliquam lacinia sollicitudin tincidunt.
							Phasellus dapibus libero nec risus eleifend feugiat.
							Praesent vestibulum odio augue, sit amet consequat odio vulputate quis.
							Nunc quis nunc ullamcorper, consectetur ligula sit amet, rhoncus tortor.
							Mauris in sem placerat massa fermentum egestas suscipit quis arcu.
							Sed id quam pretium, vulputate mauris vitae, tempor quam.
							Phasellus blandit tempor ligula tincidunt tristique.
							In sit amet nibh nec eros ultricies pulvinar.
							Quisque venenatis orci a ante molestie, ut pulvinar erat aliquet.
						</p>
						<p>
							Sed interdum lobortis massa, vel feugiat augue fringilla vitae.
							Integer tempor est vitae sapien rutrum, vel fringilla ipsum semper.
							Mauris quis cursus nisi.
							Vivamus metus dui, porttitor nec elementum non, ullamcorper at eros.
							Integer elementum finibus dolor malesuada aliquam.
							Vivamus nec placerat quam. Nunc eget justo eu sem sollicitudin bibendum.
							Duis pharetra vulputate ipsum sed tincidunt.
							Fusce suscipit, tellus eu sollicitudin tincidunt, lacus nunc euismod erat, vestibulum ultrices mi nulla viverra odio.
							In blandit lacus faucibus tempus vulputate.
						</p>
						<p>
							Mauris iaculis dignissim tempor.
							Maecenas sit amet facilisis purus.
							Phasellus non varius nibh.
							Suspendisse velit magna, bibendum vel laoreet quis, dapibus non velit.
							Suspendisse placerat velit et est eleifend tempus.
							Ut consectetur nisl non ipsum tempor, sit amet eleifend nunc rutrum.
							Pellentesque vel orci vitae ex venenatis tristique eget at eros.
							Phasellus ultricies urna ligula, non scelerisque metus luctus dignissim.
						</p>
						<p>
							Quisque ut lorem sit amet nulla ullamcorper consequat.
							Nam et lorem a urna bibendum maximus commodo vel nulla.
							Proin vitae elit sit amet elit eleifend blandit. Mauris rhoncus cursus ornare.
							Vestibulum tincidunt bibendum felis, quis sagittis purus euismod vitae.
							Sed lacus neque, ultrices id lectus vitae, pulvinar blandit tellus.
							Sed ut nulla aliquam, faucibus velit sit amet, mollis lacus.
							Morbi eget pulvinar ligula, sed posuere tellus.
							Donec velit urna, lacinia accumsan arcu ac, laoreet scelerisque neque.
							Morbi consequat lacus at metus pellentesque, sit amet rhoncus enim gravida.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-6"> <!-- Right side with register form -->
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Register Form</h4></div>
					<div class="panel-body">
						<?php
                            $email = $_POST["email"];
                            $pwd = $_POST["pwd"];
                            $pwd2 = $_POST["pwd2"];
                            $name = $_POST["name"];
                            $surname = $_POST["surname"];
                            $speciality = $_POST["speciality"];

                            if ($pwd == $pwd2)
                            {
                                $server_name = "localhost";
                                $username = "ip_database_handler";
                                $password = "bio7720";
                                $dbName = "engineering_connect";

                                $connect = mysqli_connect($server_name, $username, $password, $dbName);

                                if (!$connect)
                                {
                                    die("Connection Failed: " . mysqli_connect_error());
                                }
                                else
                                {
                                    echo "Successfull Connection<br>";
                                }

                                $sql = "INSERT INTO `users` (`UID`, `E-Mail`, `Password`, `Name`, `Surname`, `Speciality`) VALUES (NULL, '$email', '$pwd', '$name', '$surname', '$speciality')";

                                $result = mysqli_query($connect, $sql);

                                if ($result)
                                {
                                    echo "New account created <br>";
                                }

                                mysqli_close($connect);
                            }
                            else
                            {
                                echo "Retype password";
                            }
                        ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>