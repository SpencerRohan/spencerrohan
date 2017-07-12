<?php
	function social($icons){
		$social_links = array(
			'twitter' 	=> 'https://twitter.com/spencerrohan',
			'linkedin' 	=> 'https://www.linkedin.com/in/spencerrohan',
			'github'		=> 'https://github.com/spencerrohan',
			'google' 		=> 'https://plus.google.com/+SpencerRohan',
			'vimeo' 		=> 'http://vimeo.com/spencerrohan',
			'imdb' 			=> 'http://www.imdb.com/name/nm1804974/',
			// 'instagram' => 'https://www.instagram.com/criscocountyjr/',
			'mail'			=> 'mailto:spencermrohan@gmail.com?Subject=Saw%20your%20site',
			'mail-work' => 'mailto:spencermrohan@gmail.com?Subject=Saw%20your%20resume',
			'phone'			=> 'tel:2695993279'
		);

		$social_icons = array(
			'twitter' 	=> 'fa-twitter',
			'linkedin' 	=> 'fa-linkedin',
			'github' 		=> 'fa-github-alt',
			'google' 		=> 'fa-google-plus',
			'vimeo' 		=> 'fa-vimeo',
			'imdb' 			=> 'fa-imdb',
			'instagram' => 'fa-instagram',
			'mail'			=> 'fa-envelope',
			'mail-work' => 'fa-envelope',
			'phone'			=> 'fa-phone'
		);

		if ($icons == array('all')){
			$icons = array(
				'mail',
				'twitter',
				'linkedin',
				'github',
				'google',
				'vimeo',
				'imdb',
				// 'instagram',
				// 'phone'
			);
		};

		foreach ($icons as $name)
		{
			$target = "target='_blank'";
			if ($name == 'mail' || $name == 'mail-work'){
				$target = "";
			};

			echo '<!--'.$name.'-->
				<li>
					<a href="'.$social_links[$name].'" '.$target.' class="btn btn-outline-primary btn-sm" role="button" aria-pressed="true">
						<i class="fa '.$social_icons[$name].'"></i>
					</a>
				</li>';
		};	
	};
?>