<p>
    This page uses PHP's <a href="http://www.php.net/manual/en/function.hash-algos.php">hash_algos()</a> and 
    <a href="http://www.php.net/manual/en/function.hash.php">hash()</a> methods to return an array of hashes for a 
    given string.</p>
<?php
    echo $this->Form->create(
        'Hash', 
        array(
            'url'=>$this->here,
            'role'=>'form',
            'inputDefaults'=>array(
                'div'=>array(
                    'class'=>'form-group'
                ),
                'class'=>'form-control clearfix',
                'required'=>false
            )
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
    
    echo $this->Form->submit(
         __d('contents', 'Submit'), 
         array(
             'div'=>array(
                 'class'=>'form-group clearfix'
             ),
             'class'=>'btn btn-primary pull-right'
         )
     ); 
    echo $this->Form->end();
?>

<?php if(!empty($this->request->data)): ?>
    <?php for($i=0; $i<$numOfAlgos; $i++): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Algorithm: <?php echo $algos[$i]; ?></h2>
        </div>
        <div class="panel-body text-break">
            <?php echo hash($algos[$i], $this->request->data['Hash']['hash']); ?>
        </div>
    </div>
    <?php endfor; ?>
<?php endif; ?>

<aside class="text-center well well-sm well-trans">
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