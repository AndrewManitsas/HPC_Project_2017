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

		<title>EngineeringConnect</title>
	</head>
	<body>
		<div id="Header" class="row"> <!-- Header with Logo and/or Company Name -->
			<div class="col-md-12">
				<h1 id="Logo" class="bg-primary">EngineeringConnect</h1>
			</div>
		</div>

		<div class="navbar navbar-inverse"> <!-- Navigation Bar with buttons and links -->
			<ul class="nav navbar-nav"> <!-- Left Side -->
				<li class="active"><a href="index.php"><b>Home</b></a></li>
				<li><a href="projects.php"><b>Projects</b></a></li>
				<li><a href="services.php"><b>Services</b></a></li>
				<li><a href="contact.php"><b>Contact</b></a></li>
				<li><a href="submit.php"><b>Submit your project</b></a></li>
				<li><a href="select.php"><b>Select project</b></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right"> <!-- Right Side -->
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span><b>Sign Up</b></a></li>
				<li><a href="login.php"><span class="glyphicon glyphicon-user"></span><b>Login</b></a></li>
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

		<div id="Slideshow" class="row"> <!-- Slideshow with past projects / photographs to show-off -->
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" date-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox" style="width: 100%; height: 400px !important;">
						<div class="item active">
							<img src="images/slide0.jpg" alt="" style="width: 100%; height: 400px">
						</div>

						<div class="item">
							<img src="images/slide1.jpg" alt="" style="width: 100%; height: 400px">
						</div>

						<div class="item">
							<img src="images/slide2.jpg" alt="" style="width: 100%; height: 400px">
						</div>

						<div class="item">
							<img src="images/slide3.jpg" alt="" style="width: 100%; height: 400px">
						</div>
					</div>

					<!-- Left and Right Controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

		<br>

		<div id="News" class="panel panel-primary"> <!-- News Section -->
			<div class="panel-heading"><h4>News</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Pellentesque justo felis, lobortis sit amet neque nec, ultrices congue erat.
					Proin rutrum purus sem, at pellentesque nibh ultricies ut.
					Vestibulum id tempus urna.
					Donec rutrum tellus et odio euismod, sed luctus neque tincidunt.
					Morbi commodo, dui vitae mattis venenatis, leo erat blandit metus, eu iaculis dui risus vitae ex.
					Nullam at erat vel diam tempor vehicula. Nullam in neque vel lectus elementum fringilla.
					Fusce at ullamcorper velit. Nam at libero sollicitudin, lobortis mi sed, fermentum ex.
					Nulla eleifend facilisis lorem ac scelerisque.
					Aliquam erat volutpat.
					Vestibulum sem turpis, faucibus sed aliquet et, aliquet a velit.
					Vestibulum id iaculis nunc.
				</p>
				<p>
					Mauris accumsan magna non risus bibendum pretium et venenatis leo.
					Praesent eget congue odio. Nunc pharetra felis sed arcu pellentesque elementum.
					Fusce non ultrices enim, vitae porta ex. Nunc aliquam nulla id venenatis dignissim.
					Aliquam ullamcorper tempus eros et fringilla.
					Vivamus a sapien vitae nunc aliquam tincidunt fermentum at ante.
					Sed massa tortor, maximus in est in, molestie suscipit purus.
					Ut aliquam efficitur luctus. Etiam vel congue lectus, nec lacinia diam.
					Nulla pretium ultrices nibh, sit amet blandit odio interdum vel.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nam elementum, purus eu rutrum interdum, ex sapien malesuada dui, at lobortis purus nisi quis est. 
					Anean molestie congue varius. Etiam finibus risus libero, nec finibus arcu consectetur eget.
				</p>
			</div>
		</div>

		<div id="AboutUs" class="panel panel-primary"> <!-- About Us Section -->
			<div class="panel-heading"><h4>About Us</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Duis metus ante, facilisis ut elementum sed, bibendum sit amet elit.
					Quisque nec semper risus.
					Donec scelerisque leo at odio euismod, vitae vulputate urna sollicitudin.
					Etiam rhoncus nulla massa, nec scelerisque nibh sagittis a.
					Suspendisse pellentesque, urna nec commodo auctor, erat justo ornare augue, id commodo eros diam sed erat.
					Suspendisse tellus sem, bibendum a mauris molestie, ultricies pellentesque est.
					Ut cursus consectetur purus, vel tempor dui maximus vulputate.
					Mauris malesuada nibh id turpis iaculis eleifend. Etiam ornare laoreet ullamcorper.
					Nam venenatis tellus eget viverra luctus.
					Praesent ornare risus nec purus hendrerit, vitae lacinia est dignissim.
					Suspendisse efficitur consectetur pellentesque.
					Fusce vestibulum pulvinar elit eu interdum.
					Pellentesque nisi tortor, commodo at hendrerit at, rhoncus ut purus.
					Quisque aliquet tempus congue. Proin porta congue commodo.
				</p>
				<p>
					In tincidunt convallis odio.
					Etiam in ipsum sagittis, placerat eros sed, pharetra mi.
					Nullam non vestibulum enim.
					In tincidunt nulla orci, sed tincidunt velit faucibus in.
					Nulla euismod pretium velit a sollicitudin.
					Proin et posuere justo, non aliquam ipsum.
					Vestibulum erat enim, pharetra sed mi nec, lacinia pulvinar lectus.
					Sed interdum, sapien in aliquam fermentum, dolor metus rhoncus tortor, placerat dictum urna sem quis nibh.
					Nullam viverra finibus dui, id tempus felis commodo ut.
					Proin eget consequat velit.
				</p>
			</div>
		</div>

		<div id="Engineers" class="panel panel-primary"> <!-- Engineers Section -->
			<div class="panel-heading"><h4>Engineers</h4></div>
			<div class="panel-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Nunc leo dolor, venenatis ac ante in, interdum posuere neque.
					Donec ac tristique mi, nec consequat dolor.
					Aliquam id aliquam mauris.
					Sed consequat aliquam auctor.
					Morbi eu ullamcorper libero, id feugiat erat.
					Maecenas et felis risus.
					Vivamus auctor urna convallis massa gravida, nec placerat enim faucibus.
					Duis gravida scelerisque lectus, a eleifend erat finibus sed.
					Sed nisl nibh, varius ac rhoncus eget, tempor vel ligula.
					Proin lectus lectus, rhoncus in metus in, venenatis condimentum enim.
					Vestibulum varius metus sed justo ultrices eleifend.
					Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
					Nam id aliquet nunc, at congue nibh.
					Nullam finibus rhoncus turpis.
					Integer rhoncus quam magna, sed gravida felis sollicitudin accumsan.
					Nullam lobortis, neque nec commodo posuere, eros orci egestas turpis, a molestie odio augue ut urna.
				</p>
				<p>
					Fusce sed nunc interdum, lacinia ipsum vel, congue felis.
					Sed venenatis aliquam est et finibus.
					Praesent rhoncus nisi sit amet purus ullamcorper pulvinar.
					Etiam maximus neque eget fringilla scelerisque.
					Nunc facilisis nibh quam, ut consectetur enim tempor vitae.
					Fusce sit amet finibus nunc, et sagittis nulla.
					Proin tellus nisl, consectetur sit amet quam vel, sodales dapibus libero.
					In ac tristique ex. Nullam venenatis libero sed rhoncus laoreet.
					Integer efficitur pharetra urna ut commodo.
					Nulla vehicula orci nisi, pellentesque aliquet urna rutrum ut.
					Suspendisse eget arcu odio.
					Nullam in lacus quis leo iaculis tempor sed eget orci.
					Integer gravida fringilla erat, vitae fringilla nibh lacinia quis.
				</p>
			</div>
		</div>
	</body>
</html>