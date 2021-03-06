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
				<li class="active"><a href="contact.php"><b>Contact</b></a></li>
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

		<div class="row"> <!-- Alternative View with panels -->
			<div class="col-md-6"> <!-- Left Side - Google Maps embed -->
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Where are we?</h4></div>
					<div class="panel-body">
						<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow: hidden; height: 440px; width: 100%;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small></small></div><div><small></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(40.306293,21.807367),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.306293,21.807367)});infowindow = new google.maps.InfoWindow({content:'<strong>icte uowm</strong><br>Τμήμα Μηχανικών Πληροφορικής & Τηλεπικοινωνιών - Πανεπιστήμιο Δυτικής Μακεδονίας Καραμανλή & Λυγερής Κοζάνη 501 00 Ελλάδα<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					</div>
				</div>
			</div>

			<div class="col-md-6"> <!-- Right Side - Contact Form -->
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Send us your message</h4></div>
					<div class="panel-body">
						<form action="" method="">
							<div class="form-group">
								<label for="email" >E-Mail Address</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="text">Your Message</label>
								<textarea class="form-control" rows="13" id="text"></textarea>
							</div>
							<button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>