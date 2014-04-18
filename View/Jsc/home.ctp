<div class="row">
        
    <div class="col-md-8">
        <div class="hi-im-jason" style="height: 393px; overflow: hidden;">
            <h1>
                <img class="img-circle" src="https://www.gravatar.com/avatar/57dd069b73a149098c4865f8f5813303.png"></a>
                Hi, I'm Jason Snider
            </h1>
            <div class="lead clearfix">
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
                
                <div class="icons text-right">
                    <a href="http://www.linkedin.com/in/jdsnider" class="icon icon-linkedin"></a>
                    <a href="https://twitter.com/jason_snider" class="icon icon-twitter"></a>
                    <a href="https://plus.google.com/+JasonSnider?rel=author" class="icon icon-google-plus"></a>
                    <a href="https://github.com/jasonsnider" class="icon icon-github-alt"></a>
                    <a href="http://www.flickr.com/photos/jason-snider/" class="icon icon-flickr"></a>
                </div>
            
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="panel panel-success clearfix" style="height: 393px; overflow: hidden;">
            <div class="panel-heading">
                <h2 class="panel-title">Latest Post</h2>
            </div>
            <div class="panel-body" style="height: 320px; overflow: hidden;">
                <strong><?php echo $latestPost['Post']['title']; ?></strong><br>
                <?php echo $latestPost['Post']['body']; ?>
            </div>
			<div class="text-right" style="line-height: 30px; padding: 0 15px;">
				<?php 
					echo $this->Html->link(
						 'Read More',
						array(
							'plugin'=>'contents',
							'controller'=>'posts',
							'action'=>'view',
							$latestPost['Post']['slug']
						)
					); 
				?>
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