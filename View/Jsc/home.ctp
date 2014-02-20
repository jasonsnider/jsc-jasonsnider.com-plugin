<div class="row">
    <div class="jumbotron welcome-block col-md-8">
        <h1>Hi, I'm Jason Snider</h1>
        <p class="lead">
            a full stack web developer,
            designer,
            systems architect,
            security enthusiast,
            Linux aficionado,
            open source advocate,
            sys admin,
            business analyst,
            project manager,
            researcher and marketer.
            I'm a senior developer at MicroTrain Technologies
            and the lead developer for TheProfessional.Me
        </p>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success clearfix" style="height: 393px; overflow: hidden;">
            <div class="panel-heading">
                <h2 class="panel-title">Latest Post</h2>
            </div>
            <div class="panel-body">
                <strong><?php echo $latestPost['Content']['title']; ?></strong><br>
                <?php 
                    echo $this->Text->truncate(
                        strip_tags($latestPost['Content']['body']), 
                        650,
                        array(
                            'ellipsis' => '...',
                            'exact' => false,
                            'html' => true
                        )
                    ); 
                ?>
                <div>
                    <?php 
                        echo $this->Html->link(
                             'Read More',
                            array(
                                'plugin'=>'contents',
                                'controller'=>'posts',
                                'action'=>'view',
                                $latestPost['Content']['slug']
                            )
                        ); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h2 class="panel-title">The Parbake Project</h2>
            </div>
            <div class="panel-body">
                <p>A project kickstarter built on top of CakePHP.</p>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <?php 
                    echo $this->Html->link(
                        '<span class=""></span> Find out more!<br><small>...</small>',
                        '/parbake',
                        array(
                            'escape'=>false,
                            'class'=>'btn btn-success'
                        )
                    );
                ?>
            </div>
        </div>
    </div>

    <div class="col-md-4">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h2 class="panel-title">Utilities</h2>
            </div>
            <div class="panel-body">
                <p>A few utilities I have written to satisfy curiosity and meet some specific needs.</p>
                <div>&nbsp;</div>
                <?php 
                    echo $this->Html->link(
                        '<span class=""></span> Find out more!<br><small>...</small>',
                        '/jsc',
                        array(
                            'escape'=>false,
                            'class'=>'btn btn-info'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h2 class="panel-title">Blog</h2>
            </div>
            <div class="panel-body">
                <p>I'm not really a blogger but occasionally I will share some thoughts or write down things I don't want 
                to forget.</p>
                <?php 
                    echo $this->Html->link(
                        '<span class=""></span> Find out more!<br><small>...</small>',
                        '/blog',
                        array(
                            'escape'=>false,
                            'class'=>'btn btn-warning'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
</div>