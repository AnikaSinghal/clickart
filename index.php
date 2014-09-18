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

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand text-hide" href="index.html">Clickart</a>
			</div>
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
			<div class="navbar-collapse collapse">
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
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- jQuery & Bootstrap.js -->
	<script src="_/js/jquery-2.1.1.js"></script>
	<script src="_/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>