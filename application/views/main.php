<?php echo View::factory('header'); ?>
    <div id="main" class="container">
        <div class="hero-unit">
            <h1>I love board games.</h1>
            <p>
                At the moment, my collection isn't what it used to be.
                (There's only so much space in a Honda Fit.)
                But here are three I managed to smuggle across state lines.
            </p>
        </div>
        <ul class="thumbnails">
            <?php foreach ($boardgames as $boardgame) { ?>
                <li class="span4">
                    <a href="/boardgame/view/<?php echo $boardgame->id; ?>">
                    <div class="thumbnail">

                        <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>

                        <div class="caption">
                            <h3><?php echo $boardgame->name; ?></h3>
                        </div>

                    </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php echo View::factory('footer'); ?>