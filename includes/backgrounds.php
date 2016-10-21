<?php
	$backgrounds = array(
		'schridde' => array('https://s-media-cache-ak0.pinimg.com/564x/18/ca/7b/18ca7b929e73db8bb5088c05ea286584.jpg', 'http://cdn.ultraswank.net/uploads/charles-schridde-1-1000x932.jpg', 'https://67.media.tumblr.com/tumblr_m5smkiFTX51qaznpro1_500.jpg', 'https://s-media-cache-ak0.pinimg.com/564x/d0/40/b9/d040b96e74f0ecfd3bc646e63fa25b82.jpg')
	);

	$artist = array(
		'schridde' => "Charles Schridde | Motorola's 'House of the Future'"
	);

	$group = array_rand($backgrounds, 1);
	$image = $backgrounds[$group];
	$artist_url = $artist[$group];
	$url = '/assets/imgs/backgrounds/'.$group.'/';
	$url ='';
?>