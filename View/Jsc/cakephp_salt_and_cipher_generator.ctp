<h1><?php echo $this->request->title; ?></h1>
<p>
    This utility creates psuedo-random salt and cipher values for newly deployed CakePHP applications.
</p>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Psuedo-Random Salt for CakePHP</h2>
    </div>
    <div class="panel-body text-break">
        <?php echo $salt; ?>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Psuedo-Random Cipher for CakePHP</h2>
    </div>
    <div class="panel-body">
        <?php echo $cipher; ?>
    </div>
</div>