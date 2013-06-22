<!DOCTYPE html>
<html>
    <head>
        <title>Peruse a Game</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/assets/css/style.css" rel="stylesheet"/>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>I love board games.</h1>
                <p>
                    And at the moment, my collection isn't what it used to be.
                    (There's only so much space in a Honda Fit.)
                    But here are three I managed to smuggle across state lines.
                </p>
            </div>
            <ul class="thumbnails">
                <?php foreach ($boardgames as $boardgame) { ?>
                    <li class="span4">
                        <a href="#">
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
    </body>
</html>