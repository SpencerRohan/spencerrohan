<!DOCTYPE html>
<html>
	<head>
		<title>Spencer M. Rohan</title>
		<meta name="description" content="Looking for the best web developer slash filmmaker in the Chicago area? THE GALAXY?! Well tough you found Spencer M. Rohan's website first -- so deal with it.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">	
		<?php include 'includes/seo.php' ?>
		<?php include 'includes/social.php' ?>
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
				<div id="nav-buttons" class="row">
					<label id="first" for="about" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[0] ?>');">
							<span class="content-header">
									<h5>About</h5>
							</span>
						</div>
						<input id="about" type="checkbox"> 
					</label>
					
					
					<label id="second" for="film" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[2] ?>');">
							<span class="content-header">
									<h5>Filmmaker</h5>
							</span>
						</div>
						<input id="film" type="checkbox"> 
					</label>
					
					<label id="third" for="web" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[1] ?>');">
							<span class="content-header">
									<h5>Web Developer</h5>
							</span>
						</div>
						<input id="web" type="checkbox"> 
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
							<article id="content-about" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[0] ?>');">
									<h5>About</h5>
								</div>
								<p>Digital playground for Time Magazine's "2006 Person of the Year", Spencer Rohan.  10+ years of filmmaking experience. Neighborhood web slinger. Professional Air Guitarist. Futurist, feminist, and recovering pop culture junkie.  As the <a href="https://en.wikipedia.org/wiki/Flying_Spaghetti_Monster" target="_blank" alt="Flying Spaghetti Monster">FSM</a> would put it...</p>
								<p class="text-center">Filmmaker ▰ Web Developer ▰ Tinkerer</p>
								<hr>
								<ul class="icon-list text-center">
									<?php $social(['all']); ?>
								</ul>
								<hr>
								<div class="col-lg-6 push-lg-3">
									<blockquote class="blockquote border-none text-center">
								  	<p class="mb-0" style=" margin-bottom: 0; font-family:'FilmotypeLaSalle'">"I love this young man with all my heart--he keeps me aware with the messages and pictures he sends me---low battery. ~Love"</p>
								  	<div class="blockquote-footer">Patricia Rohan | Grandma</div>
									</blockquote>
								</div>

								
								
								
								<!-- <ul class="icon-list">
									<li><a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site" target="_blank"><span class="i-bariol social-icons">é</span>SpencerMRohan@gmail.com</a></li>
									<li><a href="tel:2695993279" target="_blank"><i class="fa fa-phone social-icons"></i> 269-599-3279</a></li>
									<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank">Resume</a>
								</ul>
 -->							</article>
							
							<article id="content-film" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[1] ?>');">
									<h5>Filmmaker</h5>
								</div>
								<ul class="icon-list">
									<?php $social(['imdb', 'vimeo']); ?>
								</ul>
							</article>

							<article id="content-web" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[2] ?>');">
									<h5>Web Developer</h5>
								</div>
								<ul class="icon-list">
									<?php $social(['linkedin', 'github']); ?>
									<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank">Resume</a>
								</ul>
							</article>
							

							<article id="content-projects" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[3] ?>');">
									<h5>Projects & Random</h5>
								</div>
								<p>Coming Soon</p>
							</article>
						</div>
					</div>
				</div>
			</div>
		</main>

		<script type="text/javascript" src="assets/js/app.js"></script>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						
						<span class="contact-info">
						SpencerMRohan@gmail.com ▰ 269-599-3279
						</span><span class="artist-info"><i class="fa fa-paint-brush fa-1" aria-hidden="true"></i> <?php echo $artist_info; ?></span>
					</div>
				</div>
			</div>
			
			

			
<!-- 
				<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank"> Resume </a>
				<li><a href="#!"> Site Map </a>
		

			  <span class="i-bariol">é â  ÿ  É  …  ‘ ê ä</span>  -->
		</footer>
		
	</body>
</html>