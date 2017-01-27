<?php

	$background_array = array('about.jpg', 'web.jpg', 'film.jpg', 'projects.jpg');
	
	$backgrounds = array(
		'schridde' => $background_array,
		'mccall' 	 => $background_array,
		'cameron'  => $background_array
	);

	$artist = array(
		'schridde' => "Charles Schridde",
		'mccall' => "Robert McCall",
		'cameron' => "Lou Cameron"
	);

	$group = array_rand($backgrounds, 1);
	$image = $backgrounds[$group];
	$artist_info = $artist[$group];
	$url = '/assets/imgs/backgrounds/'.$group.'/';
?>