<!DOCTYPE html>
<html>
    <head>
        <title>Peruse a Game</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
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
            <div class="row">
                <?php foreach ($boardgames as $boardgame) { ?>
                    <div class="span4">
                        <?php echo $boardgame->name; ?>
                        <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </body>
</html>