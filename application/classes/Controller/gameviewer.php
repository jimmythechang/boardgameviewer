<?php

/**
 * Controller for handling board game information.
 *
 * @author James Chang
 */
class Controller_GameViewer extends Controller {
    public function action_index()
    {
        $this->response->body(View::factory('gameselect'));

    }
}
?>
