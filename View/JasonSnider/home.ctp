<?php 
	echo $this->Html->link(
		"<span>Latest from the Blog<br> <strong>{$latestPost['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$latestPost['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	); 
	echo $this->Html->link(
		"<span>From the Blog<br> <strong>{$randomPosts[0]['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$randomPosts[0]['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	); 
	echo $this->Html->link(
		"<span>From the Blog<br> <strong>{$randomPosts[1]['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$randomPosts[1]['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	); 
	echo $this->Html->link(
		"<span>From the Blog<br> <strong>{$randomPosts[2]['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$randomPosts[2]['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	);
	echo $this->Html->link(
		"<span>From the Blog<br> <strong>{$randomPosts[3]['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$randomPosts[3]['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	);
				
	echo $this->Html->link(
		"<span>From the Blog<br> <strong>{$randomPosts[4]['Post']['title']}</strong></span>",
		array(
			'plugin'=>'contents',
			'controller'=>'posts',
			'action'=>'view',
			$randomPosts[4]['Post']['slug'],
		),
		array(
			'class'=>'tile',
			'escape'=>false
		)
	); 
		
	echo $this->Html->link(
		"<span>About the Author <i class=\"fa fa-google-plus\"></i> <i class=\"fa fa-external-link\"></i>"
		. "<br><strong>"
		. "Hi, I'm Jason Snider a full stack web developer, designer, systems architect, security enthusiast, Linux "
		. "aficionado, open source advocate, sys admin, DBA, business analyst, project manager and scrum master."
		. "</strong></span>",
		"https://plus.google.com/+JasonSnider?rel=author",
		array(
			'class'=>'tile tile-double',
			'escape'=>false,
			'target'=>'_blank'
		)
	);