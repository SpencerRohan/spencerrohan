<!DOCTYPE html>
<html>
	<head>
		<title>Spencer M. Rohan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Looking for the best web developer or filmmaker in Chicago? THE GALAXY?! Well tough you found Spencer M. Rohan's website first -- so deal with it.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">	
		<?php include 'includes/analyticstracking.php' ?>
		<?php include 'includes/social.php' ?>
		<?php include 'includes/favinfo.php' ?>
	</head>
	
	<body>
		<!-- Header -->
		<header>
			<div class="logo-container">
				<h1 class="logo">Spencer Rohan</h1>
			</div>
		</header>
		
		<?php include 'includes/backgrounds.php' ?>
		
		<!-- Main -->
		<main>
			<div class="container">
				<div id="nav-buttons" class="row">
					<label id="first" for="about" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[0] ?>');">
							<span class="content-header">
									<h2 class="h5">About</h2>
							</span>
						</div>
						<input id="about" type="checkbox"> 
					</label>
					
					
					<label id="second" for="film" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[2] ?>');">
							<span class="content-header">
									<h2 class="h5">Filmmaker</h2>
							</span>
						</div>
						<input id="film" type="checkbox"> 
					</label>
					
					<label id="third" for="web" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[1] ?>');">
							<span class="content-header">
									<h2 class="h5">Web Developer</h2>
							</span>
						</div>
						<input id="web" type="checkbox"> 
					</label>

					<label id="fourth" for="projects" class="col-lg-3 col-md-6 col-sm-12 outer-circle">
						<div class="inner-circle" style="background-image:url('<?php echo $url.$image[3] ?>');">
							<span class="content-header">
									<h2 class="h5">Projects & Random</h2>
							</span>
						</div>
						<input id="projects" type="checkbox"> 
					</label>
				</div>


				<div class="row">
					<div class="col-lg-9 push-lg-3 content-box">
						<div class="content">
							<article id="content-about" class="content-details">
								<div class="parallax-container content-banner" style="z-index:2;">
									<h2 class="h5">About</h2>
									<div class="parallax"><img src="<?php echo $url.$image[0] ?>"></div>
								</div>

								<section class="content-details">
									<p>Digital playground for Time Magazine's "2006 Person of the Year", Spencer Rohan.  10+ years of filmmaking experience. Neighborhood web slinger. Professional Air Guitarist. Futurist, feminist, and recovering pop culture junkie.  As the Flying Spaghetti Monster would put it...</p>
									<p class="main-anchors-lg text-center">
										<a href="?loc=#film!" data-current="#first" data-link="#second" class="anchor-link">Filmmaker</a> &#x25b0; 
										<a href="?loc=#web!" data-current="#first" data-link="#third" class="anchor-link">Web Developer</a> &#x25b0; 
										<a href="?loc=#projects!" data-current="#first" data-link="#projects" class="anchor-link">Tinkerer</a>
									</p>
									<p class="main-anchors-sm text-center">
										<a href="?loc=#film!" class="anchor-link" data-link="#content-film">Filmmaker</a> &#x25b0; 
										<a href="?loc=#web!" class="anchor-link" data-link="#content-web">Web Developer</a> &#x25b0; 
										<a href="?loc=#projects!" class="anchor-link" data-link="#content-projects">Tinkerer</p>
									<hr>
									<ul class="icon-list text-center">
										<?php social(array('all')); ?>
									</ul>
									<hr>
									<div class="col-lg-8 push-lg-2">
										<blockquote class="blockquote border-none text-center">
									  	<p class="mb-0 filmotypelasalle">"I love this young man with all my heart--he keeps me aware with the messages and pictures he sends me---low battery. ~Love"</p>
									  	<div class="blockquote-footer">Patricia Rohan | Grandma</div>
										</blockquote>
									</div>
								</section>
							</article>
							
							<article id="content-film" class="content-details">
								<div class="parallax-container content-banner" style="z-index:2;">
									<h2 class="h5">Filmmaker</h2>
									<div class="parallax"><img src="<?php echo $url.$image[1] ?>"></div>
								</div>
								<section class="content-details">
									<p>When they closed down all the video stores, it was just the beginning. Film school couldn't hold him. It's when they made him an IATSE member, it became personal. Now he's out for blood gripping to writing - props to producing, there's no stopping him <em>THIS TIME</em>.</p>
									<p class="text-center">
										<a id="spot-video-demo" href="#!demo" data-toggle="modal" data-target="#mviddemo" data-title="Spencer Rohan | Demo Reel">Demo Reel</a> &#x25b0; <a href="http://vimeo.com/spencerrohan" target="_blank">Vimeo</a>	&#x25b0; <a href="http://www.imdb.com/name/nm1804974/" target="_blank">IMDB</a></p>
									<hr>

									
									<div class="row">
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-1" href="#!spot-video" data-toggle="modal" data-target="#mvid1" data-title="Hollus - \"Rally Cry\" | Music Video"><img src="assets/imgs/covers/rally-cry.jpg" height="73px" width="auto" alt="Hollus Music Video">
											</a>
										</div>
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-2" href="!#spot-video" data-toggle="modal" data-target="#mvid2" data-title="Ben & Jerry's \"Super Cow\"- Spot"><img src="assets/imgs/covers/super-cow.jpg" height="73px" width="auto" alt="Ben & Jerry's Spot">
											</a>
										</div>
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-3" href="#!spot-video" data-toggle="modal" data-target="#mvid3" data-title="Latest Show Ever - RotoFugi - TV Pilot"><img src="assets/imgs/covers/rotofugi.jpg" height="73px" width="auto" alt="Latest Show Ever TV Pilot">
											</a>
										</div>
									
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-1" href="#!spot-video" data-toggle="modal" data-target="#mvid4" data-title="Lunar Suite - \"St Vincent's Thrift Store\" | Music Video"><img src="assets/imgs/covers/lunar-suite.jpg" height="73px" width="auto" alt="Lunar Suite Music Video">
											</a>
										</div>
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-2" href="!#spot-video" data-toggle="modal" data-target="#mvid5" data-title="M. Lux & The Bad Sons - \"Bad VHS\""><img src="assets/imgs/covers/bad-vhs.jpg" height="73px" width="auto" alt="Ben & Jerry's Spot">
											</a>
										</div>
										<div class="col-md-4 col-xs-6 poster-still">
											<a id="spot-video-3" href="#!spot-video" data-toggle="modal" data-target="#mvid6" data-title="Latest Show Ever - Chicago Outfit - TV Pilot"><img src="assets/imgs/covers/outfit.jpg" height="73px" width="auto" alt="Latest Show Ever TV Pilot">
											</a>
										</div>
										
									</div>
									<hr class="clear-both">
									<div class="col-lg-8 push-lg-2">
										<blockquote class="blockquote border-none text-center">
									  	<p class="mb-0 filmotypelasalle" style=" margin-bottom: 0; font-family:'FilmotypeLaSalle'">"Aaarg arrrragh arrr huraa arg."</p>
									  	<div class="blockquote-footer">Chewbacca | Spirit Animal</div>
										</blockquote>
									</div>
								</section>
							</article>

							<article id="content-web" class="content-details">
								<div class="parallax-container content-banner" style="z-index:2;">
									<h2 class="h5">Web Developer</h2>
									<div class="parallax"><img src="<?php echo $url.$image[2] ?>"></div>
								</div>
								<section class="content-details">
									<p>Dev Bootcamp grad, developer with attitude - front, back, & full stack <em>JACK!</em> See the <a id="coding-skills" href="#!coding-skills" data-toggle="modal" data-target="#mdevskills" data-title="Developer Skills">coding skills</a> that occupy the brain waves. Always working towards new techniques, learning more, and living out of the comfort zone.</p>
									<p class="text-center"><a href="/assets/docs/SpencerRohanResume.pdf">Resume</a> 	&#x25b0; <a href="https://github.com/spencerrohan" target="_blank">Github</a> 	&#x25b0; <a id="coding-skills" href="#!dev-portfolio" data-toggle="modal" data-target="#mdevportfolio" data-title="Developer Portfolio">Portfolio</a> 	&#x25b0; <a href="https://www.linkedin.com/in/spencerrohan" target="_blank">Linkedin</a></p>
									<hr>
									<div class="col-lg-12">
										<div class="col-md-3 push-md-1">
											<blockquote class="border-none text-center">
										  	<p class="glamocon available-face" style="margin-bottom: -16px;">M</p>
										  	<p class="filmotypelasalle"><a class="available-link" href="/assets/docs/SpencerRohanResume.pdf">Available Now!</a></p>
											</blockquote>
										</div>
										<div class="col-md-6 push-md-1">
											<blockquote class="border-none">
										  	<p class="text-center" style=" margin-bottom: 0;">Spencer is now looking for a new developer job. That's right - reach out today to get your hands on this eager and hardworking fellow! </p>
										  	<ul class="icon-list text-center">
													<?php social(array('mail-work')); ?>
												</ul>
											</blockquote>
										</div>
									</div>
									<hr class="clear-both">
									<div class="col-lg-8 push-lg-2">
										<blockquote class="blockquote border-none text-center">
									  	<p class="mb-0 filmotypelasalle" style=" margin-bottom: 0; font-family:'FilmotypeLaSalle'">"Spencer works well with others and has the ability to learn quickly. Probably one of the least crappy people I know."</p>
									  	<div class="blockquote-footer">Connor Ring | Fellow Code Monkey</div>
										</blockquote>
									</div>
								</section>
							</article>
							

							<article id="content-projects" class="content-details">
								<div class="parallax-container content-banner" style="z-index:2;">
									<h2 class="h5">Projects & Random</h2>
									<div class="parallax"><img src="<?php echo $url.$image[3] ?>"></div>
								</div>
								<section class="content-details">
									<img src="assets/imgs/underconstruction.png" height="130px" width="auto" alt="Under Construction - Coming Soon">
									<h4 class="text-center filmotypelasalle">Coming Soon!</h4>
								</section>
							</article>

						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Modals -->
		<?php include 'includes/modalvideos.php' ?>
		<?php include 'includes/modaldevskills.php' ?>
		<?php include 'includes/modaldevportfolio.php' ?>
		
		<!-- Scripts -->
		<script type="text/javascript" src="assets/js/app.js"></script>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<hr>
						<p class="contact-info">
							<a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site">SpencerMRohan@gmail.com</a><br>
							<a href="/assets/docs/SpencerRohanResume.pdf">Resume</a> 	&#x25b0; Site Map
						</p>
						<p class="artist-info"><i class="fa fa-paint-brush fa-1" aria-hidden="true"></i> <?php echo $artist_info; ?></p>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>