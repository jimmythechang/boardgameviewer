<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Controller for the main page.
 *
 * @author James Chang
 */
class Controller_Main extends Controller {
    public function action_index()
    {
        $view = View::factory('gameselect');

        // Retrieve the boardgames available (I've only inserted three).
        $boardgames = ORM::factory('boardgame')->limit(3)->find_all();
        $view->boardgames = $boardgames;

        $this->response->body($view);
    }
}
?>
