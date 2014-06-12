<?php 
foreach($utils as $key=>$value): 
	
	echo $this->Html->div(
		null,
		$this->Html->tag('h2', $this->Html->link($value['title'], "/jsc/jsc/{$key}"))
		. $this->Html->div(null, $value['description'])
	);
		
endforeach;