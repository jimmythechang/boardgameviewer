<?php echo View::factory('header'); ?>

    <div id="boardgameView" class="container">
        <div class="row">
            <div class="span4">
                <img src="/assets/img/<?php echo $boardgame->filename; ?>"/>
            </div>
            <div id="contentContainer" class="span7">
                <div id="gameNameContainer" class="editable">
                    <h1 class="text"><?php echo $boardgame->name; ?></h1>
                    <input type="button" value="Edit" class="editButton btn hidden"/>
                    <div class="editSection hidden">
                        <input type="text" class="editText"/>
                        <input type="button" value="Save" class="saveButton btn"/>
                        <input type="hidden" value="name" class="field"/>
                    </div>
                </div>
                <div id="gameDescriptionContainer" class="editable">
                    <p class="text"><?php echo $boardgame->description; ?></p>
                    <input type="button" value="Edit" class="editButton btn hidden"/>
                    <div class="editSection hidden">
                        <textarea class="editText" cols="10" rows="5"></textarea>
                        <input type="button" value="Save" class="saveButton btn"/>
                        <input type="hidden" value="description" class="field"/>
                    </div>
                </div>
            </div>
        </div>
        <input id="boardgameId" type="hidden" value="<?php echo $boardgame->id; ?>"/>
    </div>

<?php echo View::factory('footer'); ?>
