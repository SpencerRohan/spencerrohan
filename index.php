<!DOCTYPE html>
<html>
	<head>
		<title>Spencer M. Rohan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Looking for the best web developer slash filmmaker in the Chicago area? THE GALAXY?! Well tough you found Spencer M. Rohan's website first -- so deal with it.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/app.css">	
		<?php include 'includes/analyticstracking.php' ?>
		<?php include 'includes/social.php' ?>
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
									<p>Digital playground for Time Magazine's "2006 Person of the Year", Spencer Rohan.  10+ years of filmmaking experience. Neighborhood web slinger. Professional Air Guitarist. Futurist, feminist, and recovering pop culture junkie.  As the <a href="https://en.wikipedia.org/wiki/Flying_Spaghetti_Monster" target="_blank" alt="Flying Spaghetti Monster">FSM</a> would put it...</p>
									<p class="main-anchors-lg text-center"><a href="?loc=#film" class="fs">Filmmaker</a> 	&#x25b0; Web Developer 	&#x25b0; Tinkerer</p>
									<p class="main-anchors-sm text-center"><a href="?loc=#film" class="fs">Filmmaker</a> 	&#x25b0; Web Developer 	&#x25b0; Tinkerer</p>
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
									<p>Dev Bootcamp grad, developer with attitude - front, back, & full stack <em>JACK!</em> See the <a href="#!">coding skills</a> that occupy the brain waves. Always working towards new techniques, learning more, and living out of the comfort zone.</p>
									<p class="text-center"><a href="http://spencerrohan.dev/assets/docs/spencerrohanresume.pdf">Resume</a> 	&#x25b0; <a href="#!" target="_blank">Github</a> 	&#x25b0; <a href="#!">Portfolio</a> 	&#x25b0; <a href="#">Linkedin</a></p>
									<hr>
									<div class="col-lg-12">
										<div class="col-lg-3 push-lg-1">
											<blockquote class="border-none text-center">
										  	<p class="glamocon available-face" style="margin-bottom: -16px;">M</p>
										  	<p class="filmotypelasalle"><a class="available-link" href="#!">Available Now!</a></p>
											</blockquote>
										</div>
										<div class="col-lg-6 push-lg-1">
											<blockquote class="border-none">
										  	<p class="text-center" style=" margin-bottom: 0;">Spencer is now looking for a new developer job. That's right - reach out today to get your hands on this eager and hardworking fellow! </p>
										  	<ul class="icon-list text-center">
													<?php social(array('mail', 'phone')); ?>
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

							<article id="content-web" class="content-details">
								<div class="parallax-container content-banner" style="z-index:2;">
									<h2 class="h5">Web Developer</h2>
									<div class="parallax"><img src="<?php echo $url.$image[2] ?>"></div>
								</div>
								<section class="content-details">
									<p>Dev Bootcamp grad, developer with attitude - front, back, & full stack <em>JACK!</em> See the <a href="#!">coding skills</a> that occupy the brain waves. Always working towards new techniques, learning more, and living out of the comfort zone.</p>
									<p class="text-center"><a href="http://spencerrohan.dev/assets/docs/spencerrohanresume.pdf">Resume</a> 	&#x25b0; <a href="#!" target="_blank">Github</a> 	&#x25b0; <a href="#!">Portfolio</a> 	&#x25b0; <a href="#">Linkedin</a></p>
									<hr>
									<div class="col-lg-12">
										<div class="col-lg-3 push-lg-1">
											<blockquote class="border-none text-center">
										  	<p class="glamocon available-face" style="margin-bottom: -16px;">M</p>
										  	<p class="filmotypelasalle"><a class="available-link" href="http://spencerrohan.dev/assets/docs/spencerrohanresume.pdf">Available Now!</a></p>
											</blockquote>
										</div>
										<div class="col-lg-6 push-lg-1">
											<blockquote class="border-none">
										  	<p class="text-center" style=" margin-bottom: 0;">Spencer is now looking for a new developer job. That's right - reach out today to get your hands on this eager and hardworking fellow! </p>
										  	<ul class="icon-list text-center">
													<?php social(array('mail', 'phone')); ?>
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
									<br><h4 class="text-center filmotypelasalle">Coming Soon!</h4>
								</section>
							</article>

						</div>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Scripts -->
		<script type="text/javascript" src="assets/js/app.js"></script>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						
						<span class="contact-info">
						SpencerMRohan@gmail.com<br>
						Resume 	&#x25b0; Site Map
						</span><span class="artist-info"><i class="fa fa-paint-brush fa-1" aria-hidden="true"></i> <?php echo $artist_info; ?></span>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>