<h1>Utilities</h1>
<?php 
$utils = array(
    'cakephp_salt_and_cipher_generator'=>array(
        'title'=>'Cakephp Salt and Cipher Generator',
        'description'=>'Provides psuedo-random salt and cipher values for CakePHP applications'
    ),
    'hash_generator'=>array(
        'title'=>'Hash Generator',
        'description'=>'Returns a hashed version of a given string'
    ),
    'random_string_generator'=>array(
        'title'=>'Random String Generator',
        'description'=>'Generates psudo-random strings based on user supplied values.'
    ),
    'who_am_i'=>array(
        'title'=>'Who Am I',
        'description'=>'This is who your seen to ISP\'s and websites.'
    ),
    'domain_and_ip_analysis'=>array(
        'title'=>'Domain and IP Analysis',
        'description'=>'Returns information about a Ip address and/or domain name.'
    )
);

?>

<?php foreach($utils as $key=>$value): ?>
    <div class="well well-sm">
        <strong><?php echo $this->Html->link($value['title'], "/jsc/jsc/{$key}"); ?></strong>
        <div><?php echo $value['description']; ?></div>
    </div>
<?php endforeach;