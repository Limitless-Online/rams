<?php
/* Template Name: Template - Login */ 

?>
<html>
<head>
	<title>Innostream - Login </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo  get_stylesheet_directory_uri() ."/assets/css/custom.css"; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo  get_stylesheet_directory_uri() ."/assets/css/responsive.css"; ?>">
</head>
<body <?php body_class(); ?>>
<section class="login-container">
	<form method="POST" action="http://innostream.mysecured.host/index.php/home/"> 
		<section class="row">
			<img class="login-user-icon"src="http://innostream.mysecured.host/wp-content/uploads/2016/08/login-user-1.png" >
		</section>
		<section class="row">
			<section class="col-xs-2 login-icon"><span class="fa fa-envelope-o"></span></section>
			<section class="col-xs-10 login-txt"><input type="email" class="txt" placeholder="Email" required /></section>
		</section>
		<section class="row"> 
			<section class="col-xs-2 login-icon"><span class="fa fa-asterisk"></span></section>
			<section class="col-xs-10 login-txt"><input type="password" class="txt" placeholder="Password" required /></section>
		</section> 
		<button class="login-btn" type="submit">Login</button>
	</form>
</section> 
</body>
</html>