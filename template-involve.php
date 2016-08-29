<?php
/* Template Name: Template - Involve */ 
	get_header();
?>

<section class="involve-container">
	<section class="row">
		<h1 class="involve-title">Who?</h1>
	</section>
	<section class="row">
		<section class="col-xs-5 skills-container">
			<section class="searchforskill-container">
				<span class="fa fa-search"></span>
				<input type="text"  placeholder="Search for skills"/>
			</section>
			<section class="row">
				<section class="col-sm-6">
					<article class="skills-item">
						<img id="skill1" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/creativedesign.png">					
						<label>Creative Design</label>
					</article>
					<article class="skills-item">
						<img id="skill2" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/sales.png">					
						<label>Sales</label>
					</article>
					<article class="skills-item">
						<img id="skill3" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/custservice.png">					
						<label>Cust Service</label>
					</article>
					<article class="skills-item">
						<img id="skill4" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/techdev.png">					
						<label>Tech Dev</label>
					</article>
					<article class="skills-item">
						<img id="skill5" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/tester.png">					
						<label>Tester</label>
					</article>
					<article class="skills-item">
						<img id="skill6" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/photographer.png">					
						<label>Photographer</label>
					</article>
					<article class="skills-item">
						<img id="skill7" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/musician.png">					
						<label>Musician</label>
					</article>
				</section>
				<section class="col-sm-6">
					<article class="skills-item">
						<img id="skill8" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/cx.png">					
						<label>CX</label>
					</article>
					<article class="skills-item">
						<img id="skill9" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/marketing.png">					
						<label>Marketing</label>
					</article>
					<article class="skills-item">
						<img id="skill10" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/techarch.png">					
						<label>Tech Arch</label>
					</article>
					<article class="skills-item">
						<img id="skill11" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/data.png">					
						<label>Data</label>
					</article>
					<article class="skills-item">
						<img id="skill12" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/finance.png">					
						<label>Finance</label>
					</article>
					<article class="skills-item">
						<img id="skill13" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/video.png">					
						<label>Video</label>
					</article>
					<article class="skills-item">
						<img id="skill14" draggable="true" ondragstart="drag(event)" src="http://innostream.mysecured.host/wp-content/uploads/2016/08/sme.png">					
						<label>SME</label>
					</article>
				</section>
			</section>
		</section>
		<section class="col-xs-7">
			<h1 class="skillset_title">What skillset do you need?</h1>
			<section class="skillset_container">
				<article class="row skillset_item">
					<section class="col-sm-3">
						<div class="circle" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
					</section>
					<section class="col-sm-9 skillset_item_detail">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/teamrole.png" >
						<label>Team Role 1</label>
					</section>
				</article>
				<article class="row skillset_item">
					<section class="col-sm-3">
						<div class="circle" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
					</section>
					<section class="col-sm-9 skillset_item_detail">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/teamrole.png" >
						<label>Team Role 2</label>
					</section>
				</article>
				<article class="row skillset_item">
					<section class="col-sm-3">
						<div class="circle" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
					</section>
					<section class="col-sm-9 skillset_item_detail">
						<img src="http://innostream.mysecured.host/wp-content/uploads/2016/08/teamrole.png" >
						<label>Team Role 3</label>
					</section>
				</article>
				<br>
				<h1 class="skillset_bottomtext">Drag + Drop here</h1>
				<br>
			</section>
		</section>
	</section>
</section>

<script>
	function allowDrop(ev) {
		ev.preventDefault();
	}

	function drag(ev) {
		console.log( $(ev.target).attr('src') );
		ev.dataTransfer.setData("text", ev.target.id);
		ev.dataTransfer.setData("src", $(ev.target).attr('src'));
	}

	function drop(ev) {
		ev.preventDefault();
		var data = ev.dataTransfer.getData("text");
		var src = ev.dataTransfer.getData("src");
		//ev.target.appendChild(document.getElementById(data));
		
		jQuery(ev.target).css({"background":"url("+src+")","background-size":"85%","background-repeat":"no-repeat","background-position":"50%"});
	}
</script>
