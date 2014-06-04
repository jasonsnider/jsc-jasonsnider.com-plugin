<div class="panel panel-default">
	<?php if(!empty($utils)): ?>
		<div class="panel-heading">
			<?php echo $this->Html->link('Utilities', '/jsc'); ?>
		</div>
		<ul class="nav nav-list">
			<?php foreach($utils as $key => $value): ?>
				<li><?php echo $this->Html->link($value['title'], "/jsc/jsc/{$key}"); ?></li>
			<?php endforeach; ?>
		</ul>

	<?php endif; ?>
</div>
