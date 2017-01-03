<!DOCTYPE html>
<html>
	<head>
		<title>Spencer M. Rohan</title>
		<meta name="description" content="Looking for the best web developer slash filmmaker in the Chicago area? THE GALAXY?! Well tough you found Spencer M. Rohan's website first -- so deal with it.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
								<p>Filmmaker. Web Developer. Tinkerer.</p>

								<p>Big believer in good design and the Midwestern work ethic. 10+ years of professional filmmaking and your friendly neighborhood web slinger.  Always looking for that next project, experience, and exciting story.</p>

								<p>Currently looking for a new place to call 'HOME'.  Well work home.  This web head needs a developer job, <em><strong>ya got one?</strong></em></p>

								<p>Feel free to reach out anytime, enjoy!<br>
								-Spencer</p>

								<ul>
									<li><a href="https://www.linkedin.com/in/spencerrohan" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site" target="_blank"><span class="i-bariol">é</span>  SpencerMRohan@gmail.com</a></li>
									<li><a href="tel:2695993279" target="_blank"><i class="fa fa-phone"></i> 269-599-3279</a></li>
									<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank"> Resume</a>
								</ul>
							</article>
							
							<article id="content-film" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[1] ?>');">
									<h5>Filmmaker</h5>
								</div>
								<ul>
									<li><a href="http://vimeo.com/spencerrohan" target="_blank"><i class="fa fa-vimeo"></i></a></li>
									<li><a href="http://www.imdb.com/name/nm1804974/" target="_blank"><i class="fa fa-imdb"></i></a></li>
								</ul>
							</article>

							<article id="content-web" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[2] ?>');">
									<h5>Web Developer</h5>
								</div>
								<ul>
									<li><a href="https://www.linkedin.com/in/spencerrohan" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://github.com/spencerrohan" target="_blank"><i class="fa fa-github-alt"></i></a></li>
									<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank">Resume</a>
								</ul>
							</article>
							

							<article id="content-projects" class="content-details">
								<div class="content-banner" style="background-image:url('<?php echo $url.$image[3] ?>');">
									<h5>Projects & Random</h5>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer>
			<?php echo $artist_info; ?>
			<ul>
				<li><a href="https://www.linkedin.com/in/spencerrohan" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://twitter.com/spencerrohan" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://github.com/spencerrohan" target="_blank"><i class="fa fa-github-alt"></i></a></li>
				<li><a href="https://plus.google.com/+SpencerRohan" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="http://vimeo.com/spencerrohan" target="_blank"><i class="fa fa-vimeo"></i></a></li>
				<li><a href="http://www.imdb.com/name/nm1804974/" target="_blank"><i class="fa fa-imdb"></i></a></li>
				<li><a href="https://www.instagram.com/criscocountyjr/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site" target="_blank"><i class="fa fa-envelope"></i> SpencerMRohan@gmail.com</a></li>
				<li><a href="tel:2695993279" target="_blank"><i class="fa fa-phone"></i> 269-599-3279</a></li>
				<li><a href="/assets/docs/SpencerRohanResume.pdf" target="_blank"> Resume </a>
				<li><a href="#!"> Site Map </a>
			</ul>

			  <span class="i-bariol">é â  ÿ  É  …  ‘ ê ä</span> 
		</footer>
		<script type="text/javascript" src="assets/js/app.js"></script>
	</body>
</html>