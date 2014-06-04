<?php 

foreach($utils as $key=>$value): 
	
	echo $this->Html->div(
		'well well-sm',
		$this->Html->tag('strong', $this->Html->link($value['title'], "/jsc/jsc/{$key}"))
		. $this->Html->div(null, $value['description'])
	);
		
endforeach;