<h1><?php echo $this->request->title; ?></h1>
<p>Creates a configurable pseudo-random string.</p>
<div class="row">
    <div class="col-md-2">
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
                'length', 
                array(
                    'type'=>'text'
                )
            );

            echo $this->Form->input(
                'upper', 
                array(
                    'type' => 'checkbox',
                    'div'=>array('class'=>'checkbox'),
                    'class'=>false,
                    'label'=>array(
                        'class'=>false
                    )
                )
            );

            echo $this->Form->input(
                'lower', 
                array(
                    'type' => 'checkbox',
                    'div'=>array('class'=>'checkbox'),
                    'class'=>false,
                    'label'=>array(
                        'class'=>false
                    )
                )
            );

            echo $this->Form->input(
                'numeric', 
                array(
                    'type' => 'checkbox',
                    'div'=>array('class'=>'checkbox'),
                    'class'=>false,
                    'label'=>array(
                        'class'=>false
                    )
                )
            );

            echo $this->Form->input(
                'special', 
                array(
                    'type' => 'checkbox',
                    'div'=>array('class'=>'checkbox'),
                    'class'=>false,
                    'label'=>array(
                        'class'=>false
                    )
                )
            );

            echo $this->Form->input(
                'disambiguate', 
                array(
                    'type' => 'checkbox',
                    'div'=>array('class'=>'checkbox'),
                    'class'=>false,
                    'label'=>array(
                        'class'=>false
                    )
                )
            ); 


            echo $this->Form->submit(
                 __d('contents', 'Submit'), 
                 array(
                     'div'=>array(
                         'class'=>'form-group clearfix'
                     ),
                     'class'=>'btn btn-primary'
                 )
             ); 
            echo $this->Form->end();
        ?>
    </div>
    <div class="col-md-10">
        <?php if($string): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Your pseudo-random string</h2>
            </div>
            <div class="panel-body text-break">
                <?php echo $string; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>