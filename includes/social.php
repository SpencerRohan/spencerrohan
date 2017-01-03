<?php

	$social = function($icons){
		$social_links = [
			'twitter' => 'https://twitter.com/spencerrohan',
			'linkedin' => 'https://www.linkedin.com/in/spencerrohan',
			'github' => 'https://github.com/spencerrohan',
			'google' => 'https://plus.google.com/+SpencerRohan',
			'vimeo' => 'http://vimeo.com/spencerrohan',
			'imdb' => 'http://www.imdb.com/name/nm1804974/',
			'instagram' => 'https://www.instagram.com/criscocountyjr/',

		];
		$social_icons = [
			'twitter' => 'fa-twitter',
			'linkedin' => 'fa-linkedin',
			'github' => 'fa-github-alt',
			'google' => 'fa-google-plus',
			'vimeo' => 'fa-vimeo',
			'imdb' => 'fa-imdb',
			'instagram' => 'fa-instagram',
		];

		if ($icons == ['all']){
			$icons = [
				'twitter',
				'linkedin',
				'github',
				'google',
				'vimeo',
				'imdb',
				'instagram'
			];
		};

		foreach ($icons as $name)
		{
			echo '<!--'.$name.'-->
				<li>
					<a href="'.$social_links[$name].'" target="_blank" class="btn btn-outline-primary btn-sm" role="button" aria-pressed="true">
						<i class="fa '.$social_icons[$name].'"></i>
					</a>
				</li>';
		};	
	};

?>