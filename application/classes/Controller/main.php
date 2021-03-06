<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Controller for the main page.
 *
 * @author James Chang
 */
class Controller_Main extends Controller {
    public function action_index()
    {
        $view = View::factory('main');

        // Retrieve the Boardgames available (I've only created three).
        $boardgames = ORM::factory('boardgame')->limit(3)->find_all();
        $view->boardgames = $boardgames;

        $this->response->body($view);
    }

    public function action_notfound()
    {
        $this->response->body(View::factory('notfound'));
    }
}
?>
