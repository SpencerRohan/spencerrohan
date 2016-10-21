<!DOCTYPE html>
<html>
	<head>
		<title>Spencer M. Rohan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">	
		<?php include 'includes/seo.php' ?>
	</head>
	<body>
		<header>
			<div class="logo-container">
				<h1 class="logo">Spencer Rohan</h1>
			</div>
		</header>
		
		<?php @include 'includes/backgrounds.php' ?>

		<div class="container">
			<div class="row">
				<article class="note col-sm-12">
					Site Under Maintenance... Please check back soon! -Spencer (10.20.16)
					<br>
					 <a href="tel:2695993279">269-599-3279</a> | <a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site" target="_top">SpencerMRohan@gmail.com</a> | <a href="/assets/docs/spencerrohanresume.pdf" target="_blank">Resume</a>
				</article>
			</div>
			<div class="row">
				<label id="first" for="_1" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
					<div class="inner-circle" style="background-image:url('<?php echo $url.$image[0] ?>');">
						<span class="content">
								<h5>About</h5>
						</span>
					</div>
					<input id="_1" type="checkbox"> 
				</label>
				
				<label id="second" for="_2" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
					<div class="inner-circle" style="background-image:url('<?php echo $url.$image[1] ?>');">
						<span class="content">
								<h5>Web Developer</h5>
						</span>
					</div>
					<input id="_2" type="checkbox"> 
				</label>
				
				<label id="third" for="_3" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
					<div class="inner-circle" style="background-image:url('<?php echo $url.$image[2] ?>');">
						<span class="content">
								<h5>Filmmaker</h5>
						</span>
					</div>
					<input id="_3" type="checkbox"> 
				</label>
				
				<label id="fourth" for="_4" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
					<div class="inner-circle" style="background-image:url('<?php echo $url.$image[3] ?>');">
						<span class="content">
								<h5>Projects & Random</h5>
						</span>
					</div>
					<input id="_4" type="checkbox"> 
				</label>
			</div>
		</div>






		<footer>
	  </footer>
		<script type="text/javascript" src="assets/js/app.js"></script>
	</body>
</html>