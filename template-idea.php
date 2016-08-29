<?php
/* Template Name: Template - Idea */ 
	get_header();
?>

<section class="initiative-container">
	<section class="row">
		<article class="col-sm-6">
			<section class="inner-content">
				<h1>What?</h1>
				<br>
				<section class="col-sm-5">
					<label>Initiative name</label>
				</section>
				<section class="col-sm-7">
					<input type="text" class="what-field" placeholder="Text" />
				</section>
				<section class="col-sm-5">
					<label>Scope / hypothesis to test</label>
				</section>
				<section class="col-sm-7">
					<input type="text" class="what-field" placeholder="Text" />
				</section>
				<div style="clear:both;"></div>
				<br><br>
				<h4>Type of innovation?</h4>
				<br>
			</section>
			<section class="row typeofinnovation">
				<article class="col-sm-1"></article>
				<article class="col-sm-2">
					<!--
					<div class="">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/bizmod.png">
					</div>
					-->
					<span data-select="false" class="dashicons dashicons-layout"></span>
					<p>Biz Mod</p>
				</article>
				<article class="col-sm-2">
					<!--
					<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/cx.png">
					-->
					<span data-select="false" class="fa fa-gift"></span>
					<p>CX</p>
				</article>
				<article class="col-sm-2">
					<!--
					<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/process.png">
					-->
					<span data-select="false" class="fa fa-retweet"></span>
					<p>Process</p>
				</article>
				<article class="col-sm-2">
					<!--
					<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/technology.png">
					-->
					<span data-select="false" class="fa fa-500px"></span>
					<p>Technology</p>
				</article>
				<article class="col-sm-2">
					<!--
					<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/people.png">
					-->
					<span data-select="false" class="fa fa-meh-o"></span>
					<p>People</p>
				</article>
				<article class="col-sm-1"></article>
			</section>
		</article>
		<article class="col-sm-6">
			<section class="inner-content">
				<h1>When?</h1>
				<br>
				<section class="row">  <!-- Target Start  -->
					<section class="col-xs-3 when-labels">Target start</section>
					<section class="col-xs-9">
						<div class="when-date-container">
							<input type="text" class="targetstart-date" >
							<span class="fa fa-calendar"></span>
							<span class="fa fa-caret-down"></span>
						</div>
					</section>
				</section>
				<section class="row">  <!-- Target End  -->
					<section class="col-xs-3 when-labels">Target end</section>
					<section class="col-xs-9">
						<div class="when-date-container">
							<input type="text" class="targetend-date" >
							<span class="fa fa-calendar"></span>
							<span class="fa fa-caret-down"></span>
						</div>
					</section>
				</section>
				<section class="row">  <!-- Go-Live Date-->
					<section class="col-xs-3 when-labels">Go-Live Date</section>
					<section class="col-xs-9">
						<div class="when-date-container">
							<input type="text" class="golive-date" >
							<span class="fa fa-calendar"></span>
							<span class="fa fa-caret-down"></span>
						</div>
					</section>
				</section>
				<section class="continuousimprovement-container">
					Continuous improvement - no end date
					<img data-checked="false" rootpath="<?php echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="chk_continuous_improvement" src="<?php echo get_stylesheet_directory_uri() ."/assets/img/uncheck-checkbox.png"; ?>">
				<section>
			</section>
		</article>
	</section>
	
	<section class="row">
		<article class="col-sm-6">
			<section class="inner-content">
				<h1>Why?</h1>
				<br>
				<p>How does this align with your strategy?</p>
				<br>
				<div class="slider"></div>
				
			</section>
			<section class="row why-bottom-container">
				<!--
				<section class="col-sm-4 focus-container">
					<br>
					<h3>Focus</h3>
					<br>
					<img data-focus="internal" rootpath="<?php //echo get_stylesheet_directory_uri()."/assets/img/"; ?>" class="switch_focus" src="<?php //echo get_stylesheet_directory_uri() ."/assets/img/focus-internal.png"; ?>"/>
					<section class="col-xs-6"><h2>Internal</h2></section>
					<section class="col-xs-6"><h2>External</h2></section>
				</section>
				-->
				<section class="col-sm-12 market-segment-container">
					<br>
					<h3>Market Segment</h3>
					<br>
					<section class="col-xs-4">
						<!--
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/enterprise.png">
						-->
						<span data-select="false" class="fa fa-rocket"></span>
						<h4>Enterprise</h4>
					</section>
					<section class="col-xs-4">
						<!--
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/smb.png">
						-->
						<span data-select="false" class="fa fa-plane"></span>
						<h4>SMB</h4>
					</section>
					<section class="col-xs-4">
						<!--
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/all.png">
						-->
						<span data-select="false" class="fa fa-send"></span>
						<h4>All</h4>
					</section>
				</section>
			</section>
		</article>
		<article class="col-sm-6">
			<section class="inner-content successmeasures-container">
				<h1>Success Measures?</h1>
				<br>
				<section class="row">  <!-- Target Start  -->
					<section class="col-sm-6"><label>Measurement</label></section>
					<section class="col-sm-6">
						<select>
							<option value="technical knowledge">Technical knowledge</option>
							<option value="team">Team</option>
							<option value="industry">Industry</option>
							<option value="knowledge">Knowledge</option>
							<option value="product">Product</option>
							<option value="sme">SME</option>
						</select>
					</section>
				</section>
				<section class="row">  <!-- Target Start  -->
					<section class="col-sm-6">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/learning.png">
						<label>Learning</label>
					</section>
					<section class="col-sm-6"><input type="text" placeholder="Measurement / mth"></section>
				</section>
				<section class="row">  <!-- Target Start  -->
					<section class="col-sm-6">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/sales-growth.png">
						<label>Sales growth</label>
					</section>
					<section class="col-sm-6"><input type="text" placeholder="$ or % targets"></section>
				</section>
				<section class="row">  <!-- Target Start  -->
					<section class="col-sm-6">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/customer-sat.png">
						<label>Customer sat</label>
					</section>
					<section class="col-sm-6"><input type="text" placeholder="target NPS score / KPI"></section>
				</section>
				<section class="row">  <!-- Target Start  -->
					<section class="col-sm-6">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/process-success.png">
						<label>Process</label>
					</section>
					<section class="col-sm-6">
						<input type="text" placeholder="KPI">
						<input type="text" placeholder="Process name">
					</section>
				</section>
			</section>
		</article>
	</section>
</section>
