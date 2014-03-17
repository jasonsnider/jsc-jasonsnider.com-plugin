<h1><?php echo $this->request->title; ?></h1>
<?php
    echo $this->Form->create(
        'WhoIs', 
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
        'target', 
        array(
            'type'=>'text'
		)
    );
    
    echo $this->Form->submit(
         __d('contents', 'Submit'), 
         array(
             'div'=>array(
                 'class'=>'form-group clearfix text-right'
             ),
			 'before'=>'Please be patient, this will probably take a while.&nbsp;',
             'class'=>'btn btn-primary'
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
<?php endif;
	