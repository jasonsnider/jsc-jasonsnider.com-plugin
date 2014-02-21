<?php
 $data = array(
     array(
         'title'=>'Your IP Adrress',
         'value'=>$_SERVER['REMOTE_ADDR']
     ),
     array(
         'title'=>'Host Details (Your ISP)',
         'value'=>gethostbyaddr($_SERVER['REMOTE_ADDR'])
     ),
     array(
         'title'=>'Browser Details',
         'value'=>$_SERVER['HTTP_USER_AGENT']
     ),
     array(
         'title'=>'Referer (How you got here)',
         'value'=>isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'N/A'
     ),
 );
?>

<?php for($i=0; $i<count($data); $i++): ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $data[$i]['title']; ?></h2>
    </div>
    <div class="panel-body text-break"><?php echo $data[$i]['value']; ?></div>
</div>
<?php endfor;
