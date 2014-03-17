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
	<p>For now it's just a simple var dump of the output.</p>
	<pre><?php debug($data); ?></pre>
<?php endif;
	