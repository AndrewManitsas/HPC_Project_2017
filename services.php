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

		<title>Services | EngineeringConnect</title>
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
				<li class="active"><a href="services.php"><b>Services</b></a></li>
				<li><a href="contact.php"><b>Contact</b></a></li>
				<li><a href="submit.php"><b>Submit your project</b></a></li>
				<li><a href="select.php"><b>Select project</b></a></li>
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
						//echo "Welcome " . $_SESSION['email'];

						if ($_SESSION['spec'] == 1) //Engineer
						{
							echo "Logged in as -> (Engineer) " . $_SESSION['email'];
						}
						else if ($_SESSION['spec'] == 9) //Customer
						{
							echo "Logged in as -> (Customer) " . $_SESSION['email'];
						}
						else //$_SESSION['spec'] == 0 -> Admin
						{
							echo "Logged in as -> (ADMIN) " . $_SESSION['email'];
						}
					}
					else
					{
						echo "You are not logged in.";
					}
				?>
			</div>
		</div>

		<div id="service1" class="panel panel-primary"> <!-- Service 1 -->
			<div class="panel-heading"><h4>Service 1</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nullam at efficitur tellus, sit amet hendrerit lacus.
					Aliquam non justo tortor. Fusce dignissim suscipit hendrerit.
					Mauris et lobortis orci. Nulla tempus auctor fringilla.
					Morbi molestie cursus nisi ac rhoncus. Sed quis gravida massa.
					Mauris nec facilisis urna. Duis convallis efficitur vulputate.
					Phasellus vel enim erat. In tristique porttitor ligula ac lacinia.
					Etiam et luctus nisi. Mauris vitae magna sed nisi molestie auctor.
					Proin pellentesque tempor turpis, vitae posuere sapien tempor ac.
					Quisque suscipit turpis quis magna hendrerit ullamcorper.
					Praesent sollicitudin ac ipsum ac egestas.
				</p>
				<p>
					Curabitur eget dapibus nulla, ut porta mi.
					In libero erat, sagittis vitae arcu id, ultrices faucibus tortor.
					Praesent elementum gravida viverra.
					Ut tincidunt tincidunt arcu.
					In pellentesque ut purus id imperdiet.
					Nullam ultricies consequat lectus at tincidunt.
					Nam non porta tellus.
					Interdum et malesuada fames ac ante ipsum primis in faucibus.
					Pellentesque ultrices neque vitae feugiat posuere.
					Nunc malesuada viverra elit, vel accumsan orci faucibus vitae.
					Pellentesque mollis massa eu mauris cursus, vel consequat turpis congue.
					Vivamus nec luctus tortor, vitae rutrum velit.
					Integer varius turpis at efficitur convallis.
					Suspendisse potenti.
					Integer consequat vehicula euismod.
				</p>
			</div>
		</div>

		<div id="service2" class="panel panel-primary"> <!-- Service 2 -->
			<div class="panel-heading"><h4>Service 2</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Praesent neque neque, consequat non felis molestie, ullamcorper tempus nisi.
					Integer lectus elit, dapibus ac metus eget, vestibulum ullamcorper neque.
					Nam et sollicitudin felis.
					Maecenas ut diam vitae orci pulvinar gravida quis dapibus enim.
					In varius, diam rutrum lobortis congue, nibh ligula sodales ligula, non viverra nisl enim a enim.
					Suspendisse eleifend magna non fringilla volutpat.
					Nunc imperdiet neque a ex consequat mattis.
					Praesent nec nunc non urna interdum auctor in et ligula.
					Pellentesque posuere odio ornare nulla fringilla, sed imperdiet risus tincidunt.
				</p>
				<p>
					Nam pellentesque mauris et ex molestie, vitae vehicula enim vehicula.
					Pellentesque vestibulum sem ut ligula viverra, eget dapibus libero viverra.
					Duis fermentum vitae enim eu commodo.
					Donec aliquet augue eros, aliquam viverra ex vehicula ac.
					In tortor nibh, ultrices sed odio vel, vehicula iaculis orci.
					Vestibulum id consequat est, in molestie tellus.
					Phasellus eget ultricies erat.
					Proin efficitur feugiat dolor, at venenatis augue rutrum non.
					Duis facilisis molestie felis vel tempus. Nulla quis mattis erat.
					Curabitur ac commodo justo. Fusce ac aliquam ante.
					Praesent sit amet elit vitae dolor tincidunt molestie et a ligula.
				</p>
			</div>
		</div>

		<div id="service3" class="panel panel-primary"> <!-- Service 3 -->
			<div class="panel-heading"><h4>Service 3</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Cras dictum, metus a blandit tristique, ligula orci faucibus lorem, ac ultrices tellus massa a massa.
					Aenean turpis urna, porta nec enim quis, mattis accumsan justo.
					Duis id sodales enim, nec tristique magna.
					Suspendisse aliquet, purus ut efficitur rutrum, augue massa sollicitudin sapien, vel semper nisl sapien nec leo.
					Ut lacus massa, rhoncus at mollis at, pulvinar at lorem.
					In commodo erat eget eleifend aliquet.
					Duis id placerat nibh, nec dignissim nisi.
					Duis a dolor et tortor pretium scelerisque. 
					Sed ac ante fermentum, sodales ipsum non, dapibus ex.
					Etiam vitae nibh et nisi lobortis consequat.
				</p>
				<p>
					Donec nec turpis odio.
					In at magna metus.
					Suspendisse accumsan posuere risus a pretium.
					Praesent eget leo a arcu bibendum auctor eget id libero.
					Nam nec leo venenatis, mattis mauris non, sollicitudin dui.
					Vivamus dolor nisi, molestie sit amet ultrices et, rhoncus varius nulla.
					Nunc at turpis at lectus imperdiet congue.
				</p>
			</div>
		</div>
	</body>
</html>