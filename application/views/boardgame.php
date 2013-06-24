<?php echo View::factory('header'); ?>
    <div id="boardgameView" class="container">
        <div class="row">
            <div class="span4">
                <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>
            </div>
            <div class="span8">
                <div id="gameNameContainer" class="editable">
                    <h1 class="text"><?php echo $boardgame->name; ?></h1>
                    <input type="button" value="Edit" class="editButton btn btn-primary hidden"/>
                    <div class="editSection hidden">
                        <input type="text" class="editText"/>
                        <input type="button" value="Save" class="saveButton btn btn-primary"/>
                    </div>
                </div>
                <div id="gameDescriptionContainer" class="editable">
                    <p class="text"><?php echo $boardgame->description; ?></p>
                    <input type="button" value="Edit" class="editButton btn btn-primary hidden"/>
                    <div class="editSection hidden">
                        <textarea class="editText" cols="10" rows="5"></textarea>
                        <input type="button" value="Save" class="saveButton btn btn-primary"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo View::factory('footer'); ?>
