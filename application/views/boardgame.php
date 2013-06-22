<?php echo View::factory('header'); ?>
    <div class="container">
        <div class="row">
            <div class="span4">
                <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>
            </div>
            <div class="span8">
                <h1><?php echo $boardgame->name; ?></h1>
                <p><?php echo $boardgame->description; ?></p>
            </div>
        </div>
    </div>
<?php echo View::factory('footer'); ?>
