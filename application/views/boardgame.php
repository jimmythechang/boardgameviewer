<?php echo View::factory('header'); ?>
    <div class="container">
        <div class="row">
            <div class="span4">
                <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>
            </div>
            <div class="span8">
                <div id="gameNameContainer">
                    <h1><?php echo $boardgame->name; ?></h1>
                    <input type="button" value="Edit" class="editButton btn btn-primary"/>
                </div>
                <div id="gameDescriptionContainer">
                    <p><?php echo $boardgame->description; ?></p>
                    <input type="button" value="Edit" class="editButton btn btn-primary"/>
                </div>
            </div>
        </div>
    </div>
<?php echo View::factory('footer'); ?>
