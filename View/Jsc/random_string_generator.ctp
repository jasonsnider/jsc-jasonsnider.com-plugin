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
            /*
             * @param integer $length The length of the string
             * @param boolean $upper Add the A-Z character set
             * @param boolean $lower Add the a-z character set
             * @param boolean $numeric Add the numeric character set
             * @param boolean $special Add the special character set
             * @param boolean $disambiguate Removes potentially ambiguous characters from the alphabets */
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
            <div class="panel-body" style="word-break: break-all;">
                <?php echo $string; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>