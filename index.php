<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- To make IE use edge mode -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For viewport resizing on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico">
	<link rel="stylesheet" href="_/css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title>Clickart</title>
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<section class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand text-hide" href="index.php">Clickart</a>
				</section>
				<!-- .navbar-header -->

				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<label for="navbar-searchbox" class="sr-only">Search</label>
						<div class="input-group">
							<input type="text" id="navbar-searchbox" class="form-control" placeholder="Search">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</form>

				<!-- search form -->
				<section class="navbar-collapse collapse">
					<form class="navbar-form navbar-right" role="login">
						<div class="hidden-sm form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" id="email" placeholder="Email" class="form-control">
						</div>
						<div class="hidden-sm form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" id="password" placeholder="Password" class="form-control">
						</div>
						<button type="submit" class="btn btn-success">Sign in</button>
					</form>
					<!-- login form -->
				</section>
				<!--.navbar-collapse -->
			</div>
			<!-- .container -->
		</nav>
		<!-- .navbar -->
	</header>

	<div class="container body" style="background-color: red;">
		<div class="row">
			<div class="main col-md-9" style="min-height: 80vmin; background-color: black;">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/blue.png" alt="...">
							<div class="carousel-caption">
								.1.
							</div>
						</div>
						<div class="item">
							<img src="images/red.png" alt="...">
							<div class="carousel-caption">
								.2.
							</div>
						</div>
						<div class="item">
							<img src="images/green.png" alt="...">
							<div class="carousel-caption">
								.3.
							</div>
						</div>
					</div>

					<!-- Controls -->
					<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a> -->
				</div>
				<!-- .carousel -->
			</div>
			<!-- .main -->
			<aside class="sidebar col-md-3">
				<div style="min-height: 80vmin; background-color: green;">
				</div>

			</aside>
			<!-- .sidebar -->
		</div>
		<!-- .row -->
	</div>
	<!-- .body -->

	<!-- jQuery & Bootstrap.js -->
	<script src="_/js/jquery-2.1.1.js"></script>
	<script src="_/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
