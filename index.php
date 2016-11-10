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
		<main>
			<div class="container">
<!-- 				<div class="row">
					<article class="note col-sm-12">
						Site Under Maintenance... Please check back soon! -Spencer (10.20.16)
						<br>
						 <a href="tel:2695993279">269-599-3279</a> | <a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site" target="_top">SpencerMRohan@gmail.com</a> | <a href="/assets/docs/spencerrohanresume.pdf" target="_blank">Resume</a>
					</article>
				</div> -->
				<div class="row">
					
					<label id="first" for="about" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[0] ?>');">
							<span class="content-header">
									<h5>About</h5>
							</span>
						</div>
						<input id="about" type="checkbox"> 
					</label>
					
					<label id="second" for="web" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[1] ?>');">
							<span class="content-header">
									<h5>Web Developer</h5>
							</span>
						</div>
						<input id="web" type="checkbox"> 
					</label>
					
					<label id="third" for="film" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[2] ?>');">
							<span class="content-header">
									<h5>Filmmaker</h5>
							</span>
						</div>
						<input id="film" type="checkbox"> 
					</label>
					
					<label id="fourth" for="projects" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[3] ?>');">
							<span class="content-header">
									<h5>Projects & Random</h5>
							</span>
						</div>
						<input id="projects" type="checkbox"> 
					</label>
				</div>
				<div class="row">
					<div class="col-lg-9 push-lg-3 content-box">
						<div class="content">
							<article id="content-about" class="content-details">about 

									<i class="fa fa-linkedin"></i> Linkedin
									<i class="fa fa-twitter"></i> Twitter
									<i class="fa fa-github-alt"></i> Github
									<i class="fa fa-google-plus"></i> Google
									<i class="fa fa-vimeo"></i> Vimeo
									<i class="fa fa-imdb"></i> IMDB

									<i class="fa fa-envelope"></i> Email  <span class="i-bariol">
										∑ é â  ÿ   É  …  ‘    ê ä &loz; &#11048; 
									</span>
									<i class="fa fa-phone"></i> Phone 

							</article>
							<article id="content-web" class="content-details">web</article>
							<article id="content-film" class="content-details">film</article>
							<article id="content-projects" class="content-details">projects</article>
						</div>
					</div>
				</div>
			</div>
		</main>





		<footer>Footer Here!</footer>
		<script type="text/javascript" src="assets/js/app.js"></script>
	</body>
</html>