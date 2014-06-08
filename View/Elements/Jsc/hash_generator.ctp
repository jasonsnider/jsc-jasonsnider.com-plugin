<aside>
	<?php if(!empty($utils)): ?>
		<h4><?php echo $this->Html->link('Utilities', '/jsc'); ?></h4>
		<ul>
			<?php foreach($utils as $key => $value): ?>
				<li><?php echo $this->Html->link($value['title'], "/jsc/jsc/{$key}"); ?></li>
			<?php endforeach; ?>
		</ul>

	<?php endif; ?>
</aside>