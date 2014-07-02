<p>Creates a configurable pseudo-random string. This can be used for creating passwords, WiFi ciphers or anything else 
	that may benefit from pseudo-random strings.</p>
<div class="row">
	<?php
		echo $this->Form->create(
			'Hash', 
			array(
				'url'=>$this->here,
				'role'=>'form',
				'class'=>'default'
			)
		);

		echo $this->Form->input('length', array('type'=>'text')); 
		echo $this->Form->input('upper', array('type' => 'checkbox')); 
		echo $this->Form->input('lower', array('type' => 'checkbox')); 
		echo $this->Form->input('numeric', array('type' => 'checkbox')); 
		echo $this->Form->input('special', array('type' => 'checkbox')); 
		echo $this->Form->input('disambiguate', array('type' => 'checkbox')); 
		echo $this->Form->submit(__('Submit')); 
		echo $this->Form->end();
	?>

	<?php if($string): ?>
		Your pseudo-random string
		<div class="answer"><?php echo $string; ?></div>
	<?php endif; ?>

</div>

<aside class="ad">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Leaderboard -->
	<ins class="adsbygoogle"
		 style="display:inline-block;width:728px;height:90px"
		 data-ad-client="ca-pub-2297949586762275"
		 data-ad-slot="3778634944"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</aside>