<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		<title>Innostream - Home </title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo  get_stylesheet_directory_uri() ."/assets/css/custom.css"; ?>"> 
		<link rel="stylesheet" type="text/css" href="<?php echo  get_stylesheet_directory_uri() ."/assets/css/responsive.css"; ?>"> 
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css"> 
		<script src="<?php echo  get_stylesheet_directory_uri() ."/assets/js/custom.js"; ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"; ?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo  get_stylesheet_directory_uri() ."/assets/css/jquery-ui-slider-pips.min.css"; ?>"> 
		<script src="<?php echo  get_stylesheet_directory_uri() ."/assets/js/jquery-ui-slider-pips.min.js"; ?>"></script>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
		<?php global $post; ?>
		<section class="header-container">
			<h1 class="header-title"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?><?php echo get_the_title($post); ?></h1>
			<a href="/" class="loggedin-user-lnk">
				<section class="loggedin-user">
					<span class="fa fa-user"></span>
					<h5>John</h5>
				</section>
			</a>
			<section class="search-container">
				<span class="fa fa-search"></span>
				<input type="text"  placeholder="Search..."/>
			</section>
			<button class="btn-menu"><span class="fa fa-bars"></span></button>
			<div style="clear:both;"></div>
		</section> 
		<sidebar>
			<!--
			<ul class="vmenu">
				<a href="http://innostream.mysecured.host/index.php/home/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/home-2.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/dashboard-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/dashboard-1.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/idea-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/idea-1.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/involve-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/involve-1.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/invest-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/invest-1.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/implementation-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/implementation-1.png"></li></a>
				<a href="http://innostream.mysecured.host/index.php/iterate-2/"><li><img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/iterate-1.png"></li></a>
			</ul>
			-->
			<ul class="vmenu">
				<a href="http://innostream.mysecured.host/index.php/home/"><li><span class="fa fa-home"></span><h4>HOME</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/dashboard-2/"><li><span class="fa fa-dashboard"></span><h4>DASHBOARD</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/idea-2/"><li><span class="fa fa-lightbulb-o"></span><h4>IDEA</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/involve-2/"><li><span class="fa fa-users"></span><h4>INVOLVE</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/invest-2/"><li><span class="fa fa-dollar"></span><h4>INVEST</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/implementation-2/"><li><span class="fa fa-wrench"></span><h4>IMPLEMENTATION</h4></li></a>
				<a href="http://innostream.mysecured.host/index.php/iterate-2/"><li><span class="fa fa-refresh"></span><h4>ITERATE</h4></li></a>
			</ul>
		</sidebar>