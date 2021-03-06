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

		<title>Projects | EngineeringConnect</title>
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
				<li class="active"><a href="projects.php"><b>Projects</b></a></li>
				<li><a href="services.php"><b>Services</b></a></li>
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

		<div id="project1" class="panel panel-primary"> <!-- Project 1 -->
			<div class="panel-heading"><h4>Project 1</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Maecenas lacinia sit amet turpis egestas imperdiet.
					Phasellus pretium tortor sed velit laoreet blandit.
					Donec quis hendrerit libero. Donec sed tempus ante.
					Quisque porttitor turpis sit amet lacus aliquam, nec pellentesque mauris aliquam.
					Phasellus pharetra euismod dapibus. Integer vel luctus mauris, at auctor orci.
					Vestibulum vehicula eget nibh vel bibendum.
					Proin vel massa ut risus volutpat tempus eu quis lorem.
					Aliquam erat volutpat.
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					Sed eu fringilla nunc.
					Curabitur eget ornare ex, eu pharetra erat.
					Pellentesque non elit ut urna porta molestie.
					Suspendisse id dignissim erat.
				</p>
				<p>
					Pellentesque gravida et nunc quis pellentesque.
					Nunc iaculis suscipit erat non cursus.
					Nunc tempus tellus lorem, sit amet lacinia felis convallis ut.
					Pellentesque semper pretium ante, efficitur aliquet justo convallis sed.
					Nam eu tortor iaculis, laoreet arcu a, accumsan odio.
					Pellentesque volutpat nec mauris iaculis finibus.
					Duis massa mauris, molestie ut tellus sed, varius posuere tellus.
					Praesent sed faucibus ipsum.
					Nunc aliquet eleifend lacus, at tristique risus cursus sit amet.
					Proin feugiat dui ut dignissim malesuada.
					Integer eu auctor erat, vitae commodo dolor.
					Etiam lectus lacus, auctor ornare tempus quis, tincidunt sed erat.
					Aenean euismod enim id ornare sollicitudin.
				</p>
			</div>
		</div>

		<div id="project2" class="panel panel-primary"> <!-- Project 2 -->
			<div class="panel-heading"><h4>Project 2</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Phasellus non neque lacinia arcu elementum aliquet ut non justo.
					Nunc tincidunt porttitor diam vitae interdum.
					Nulla turpis enim, pretium ac arcu vitae, aliquet ultrices risus.
					Aliquam consectetur ornare molestie.
					Etiam sit amet pulvinar nulla, vitae cursus tortor.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					In hac habitasse platea dictumst. Nullam mi velit, egestas ac nibh vel, efficitur interdum erat.
				</p>
				<p>
					Integer at urna vitae leo egestas hendrerit eu id elit.
					Ut lacus elit, laoreet eu eleifend vitae, vestibulum eu nibh.
					Phasellus nisl est, convallis id convallis non, interdum ut eros.
					Vestibulum ultrices eros nisl, non consequat ante molestie at.
					Morbi pulvinar eu justo sit amet rutrum.
					Vestibulum at justo sit amet nibh hendrerit sagittis.
					Nulla ultrices vulputate quam at lacinia.
					Mauris eget nulla vel metus scelerisque mattis.
					Cras ullamcorper sapien a blandit vestibulum.
					Aenean augue eros, suscipit vitae enim in, placerat ultricies ipsum.
					Ut vitae nulla eget sem cursus consectetur dapibus vitae turpis.
					Ut congue lectus ipsum, at rutrum est fermentum nec.
					Maecenas aliquam nisi at nisl fringilla, id aliquam velit commodo.
				</p>
			</div>
		</div>

		<div id="project3" class="panel panel-primary"> <!-- Project 3 -->
			<div class="panel-heading"><h4>Project 3</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nunc nisi neque, viverra vitae turpis non, eleifend mattis diam.
					In mi leo, feugiat ac mollis pulvinar, ornare id felis.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					Donec id eleifend metus. Vivamus id mollis tortor.
					Suspendisse ornare, lorem non vulputate blandit, ligula dui sagittis lorem, ut maximus massa augue id elit.
					Vestibulum sem dui, ultricies non turpis a, luctus imperdiet erat.
					Quisque ullamcorper condimentum luctus.
					Proin hendrerit eros eu diam dapibus, at pellentesque orci semper.
					Sed malesuada elit non nisi hendrerit faucibus. Aenean quis finibus turpis.
					Nulla eget lobortis justo. Aenean orci nunc, faucibus ac finibus sed, facilisis vel urna.
					Donec efficitur accumsan placerat. Nulla vitae efficitur sem. Proin nec rutrum odio.
				</p>
				<p>
					Vestibulum gravida libero vitae ante tincidunt malesuada.
					Praesent congue risus blandit venenatis commodo. Suspendisse potenti.
					Morbi a odio pulvinar, bibendum urna ac, ornare enim.
					Nam non dolor pellentesque, aliquet turpis vitae, fermentum est.
					Quisque elementum lacus non pellentesque finibus.
					Nullam eu tellus eu massa commodo dapibus. Sed vitae finibus nibh.
					Quisque varius vulputate felis in tincidunt.
					Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
				</p>
			</div>
		</div>
	</body>
</html>