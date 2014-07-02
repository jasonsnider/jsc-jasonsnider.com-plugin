<p>Returns information about a given domain or IP address.</p>
<?php
    echo $this->Form->create(
        'WhoIs', 
        array(
            'url'=>$this->here,
            'role'=>'form'
		)
    );

    echo $this->Form->input(
        'target', 
        array(
            'type'=>'text'
		)
    );
    
    echo $this->Form->submit(
         __d('contents', 'Submit'), 
         array(
			 'before'=>'Please be patient, this will probably take a while.&nbsp;'
         )
     ); 
    echo $this->Form->end();

if(!empty($data)): ?>
	<h2>Host Details</h2>
	<pre><code>Host Address: <?php echo (!empty($data['gethostbyaddr'])?$data['gethostbyaddr']:'N/A') . "\n"; ?>
Host Name: <?php echo $data['gethostbyname'] . "\n"; ?>
Host Name List: 
<?php for($i=0; $i<count($data['gethostbynamel']); $i++): ?>
<?php echo $data['gethostbynamel'][$i]; echo $i < count($data['gethostbynamel'])?"\n":''; ?>
<?php endfor; ?></code></pre>

	<h2>Traceroute output</h2>
	<pre><code><?php echo $data['traceRoute']; ?></code></pre>

	<h2>Whois Record</h2>
	<pre><code><?php echo $data['whois']; ?></code></pre>
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
	