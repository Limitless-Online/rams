<?php
/* Template Name: Template - Invest */ 
	get_header();
?>

<section class="invest-container">
	<h1 class="invest-title">Investment areas</h1>
	<section class="row">
		<section class="col-sm-3">
			<label>Investment approach?</label>
		</section>
		<section class="col-sm-9">
			<article class="investmentapproach-item">
				<!--
				<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/internal-budget.png"/>
				-->
				<span data-select="false" class="fa fa-dollar"></span>
				<p>Internal budget</p>
			</article>
			<article class="investmentapproach-item">
				<!--
				<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/internal-budget.png"/>
				-->
				<span data-select="false" class="fa fa-dollar"></span>
				<p>Investors</p>
			</article>
			<article class="investmentapproach-item">
				<!--
				<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/finance.png"/>
				-->
				<span data-select="false" class="fa fa-credit-card"></span>
				<p>Bank loan</p>
			</article>
			<article class="investmentapproach-item">
				<!--
				<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/personal-savings.png"/>
				-->
				<span data-select="false" class="fa  fa-bitbucket"></span>
				<p>Personal Savings</p>
			</article>
			<article class="investmentapproach-item">
				<!--
				<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/crowd-funding.png"/>
				-->
				<span data-select="false" class="fa fa-user-plus"></span>
				<p>Crowd Funding</p>
			</article>
		</section>
	</section>
	<br>
	<section class="row">
		<section class="col-sm-12">
			<label>How much do you need?</label>
		</section>
		<br>
		<br>
		<!--<section class="col-xs-1"></section> -->
		<section class="col-xs-12">
			<div class="slider-howmuchdoyouneed"></div>
		</section>
		<!--<section class="col-xs-1"></section> -->
	</section>
	<br>
	<section class="row">
		<section class="col-sm-12">
			<label>How much do you have?</label>
		</section>
		<br>
		<br>
		<!--<section class="col-xs-1"></section> -->
		<section class="col-xs-12">
			<div class="slider-howmuchdoyouneed"></div>
		</section>
		<!--<section class="col-xs-1"></section> -->
	</section>
</section>
<br>
<hr style="height: 3px;background: #222;">
<section class="investment-summary-container">
	<h1 class="invest-title">Investment Summary Needs</h1>
	<table class="tbl_investment_summery table table-bordered">
	  <thead>
		<tr>
		  <th>Investment type</th>
		  <th></th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td>Sales</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr>
		  <td>Marketing</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr style="background:#ECECEC;">
		  <td>Development</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr>
		  <td>Legal</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr>
		  <td>Consulting</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr>
		  <td>Customer service</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
		<tr>
		  <td>Operations</th>
		  <td><img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_investsummary" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/invest-checkbox-uncheck.png"; ?>"></td>
		</tr>
	  </tbody>
	</table>
</section>
