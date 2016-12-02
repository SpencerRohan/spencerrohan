<?php
	$backgrounds = array(
		'schridde' => array('about.jpg', 'web.jpg', 'film.jpg', 'projects.jpg')
	);

	$artist = array(
		'schridde' => "Charles Schridde | Motorola's 'House of the Future'"
	);

	$group = array_rand($backgrounds, 1);
	$image = $backgrounds[$group];
	$artist_info = $artist[$group];
	$url = '/assets/imgs/backgrounds/'.$group.'/';
?>