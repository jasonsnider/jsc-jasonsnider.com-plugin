<style>
	.tile{
		padding:2px 4px;
		margin:0;
		border: none;
		background: #fff; 
		color: #fff; 
		font-weight: normal;
		display: inline-block;
		width: 100%;
		overflow:hidden;
	}
	
	.tile span{
		display: inline-block;
		width: 100%;
		background: #000;
		height: 180px;
		padding: 24px;
		font-size: 120%;
	}

	.tile:hover span{
		background: #428bca;
		color: #fff;
	}

	.tile-double{
		font-size: 70%;
	}
	
	@media (min-width: 400px) {
		.tile-double{
			width: 100%;
			font-size: 90%;
		}
	}
	
	@media (min-width: 480px) {
		.tile{
			width: 50%;
		}
		
		.tile-double{
			width: 100%;
			font-size: 100%;
		}
	}
	
	@media (min-width: 768px) {
		.tile{
			width: 25%;
		}
		
		.tile-double{
			width: 50%; 
			font-size: 100%;
		}
	}
	
	
</style>

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