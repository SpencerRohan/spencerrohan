<?php

	$background_array = array('about.jpg', 'web.jpg', 'film.jpg', 'projects.jpg');
	
	$backgrounds = array(
		'schridde' => $background_array,
		'mccall' 	 => $background_array
	);

	$artist = array(
		'schridde' => "Charles Schridde &#x25b0; Motorola's 'House of the Future'",
		'mccall' => "Robert McCall"
	);

	$group = array_rand($backgrounds, 1);
	$image = $backgrounds[$group];
	$artist_info = $artist[$group];
	$url = '/assets/imgs/backgrounds/'.$group.'/';
?>