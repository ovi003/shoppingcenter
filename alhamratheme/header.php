<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php bloginfo('name'); ?></title>

	<!-- Bootstrap -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<!-- <link href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
</head>
	<?php wp_head(); ?>
	<body <?php body_class(); ?>>

		<div class="container">

			<div class="row" id="header">

				<div class="col-xs-6">
					<div class="row">
						<h1 class="headertext"><?php bloginfo('name'); ?></h1>
					</div>
				</div>

				<div class="col-xs-3 col-xs-offset-3">
					<div class="row input-group" id="searchbutton">
						<input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
						<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
					</div>
				</div>

			</div><!-- end of header -->

			<div class="row" id="main_menu">

				<nav class="navbar navbar-default">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>

					</div><!-- end of navbar-header -->

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


						<?php wp_nav_menu(array(

							'theme_location'=>'main_menu',
							'menu_class'=>'nav navbar-nav',
							'walker'=>new wp_bootstrap_navwalker()

						)) ?>

					</div>
				</nav>

			</div><!-- end of main_menu -->

			<div class="row" id="alhamra">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="active item" id="slide1">
							<img src="<?php echo get_template_directory_uri()?>/img/bg1.jpg" height="400px" class="img-responsive">
						</div>
						<div class="item" id="slide2">
							<img src="<?php echo get_template_directory_uri()?>/img/bg2.jpg" class="img-responsive">
						</div>
						<div class="item" id="slide3">
							<img src="<?php echo get_template_directory_uri()?>/img/bg3.jpg" class="img-responsive">
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="icon-prev">

						</span>                                                     
					</a>
					<a class="right carousel-control " href="#myCarousel" data-slide="next">
						<span class="icon-next">

						</span>
					</a>
				</div> <!-- end myCarousel --> 

			</div><!-- end of alhamra -->