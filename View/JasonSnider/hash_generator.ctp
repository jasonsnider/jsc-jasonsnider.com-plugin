<p>
    This page uses PHP's <a href="http://www.php.net/manual/en/function.hash-algos.php">hash_algos()</a> and 
    <a href="http://www.php.net/manual/en/function.hash.php">hash()</a> methods to return an array of hashes for a 
    given string.</p>
<?php
    echo $this->Form->create(
        'Hash', 
        array(
            'url'=>$this->here,
            'role'=>'form'
        )
    );

    echo $this->Form->input(
        'hash', 
        array(
            'type'=>'textarea', 
            'rows'=>2,
            'label'=>"There are <em>{$numOfAlgos}</em> hashing algorithms available on this system. Enter a string "
                . "in the field below to see the resulting hash(es)."
        )
    );
    
    echo $this->Form->submit(__d('contents', 'Submit')); 
    echo $this->Form->end();
?>

<?php if(!empty($this->request->data)): ?>
    <?php for($i=0; $i<$numOfAlgos; $i++): ?>
    <section>
        <header>
            <h2>Algorithm: <?php echo $algos[$i]; ?></h2>
        </header>
        <div class="text-break">
            <?php echo hash($algos[$i], $this->request->data['Hash']['hash']); ?>
        </div>
    </section>
    <?php endfor; ?>
<?php endif; ?>

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