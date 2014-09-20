<?php include_once('_/lib/header.tmp.php'); ?>

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

<?php include_once('_/lib/footer.tmp.php');
