<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Controller for a Boardgame; takes POST data from
 * the page and signals the Model to update its data
 * accordingly.
 */

class Controller_Boardgame extends Controller {
    
    // Display the view for a given boardgame.

    public function action_view()
    {
        $id = $this->request->param();
        $boardgame = new Model_Boardgame($this->request->param('id'));

        if ( ! $boardgame->loaded() )
        {
            HTTP::redirect('/notfound');
        }

        $view = View::factory('boardgame');
        $view->boardgame = $boardgame;
        
        $this->response->body($view);
    }

    // Signal to the model that some new data must be saved.
    
    public function action_save() {
        if (HTTP_Request::POST == $this->request->method()) {
            $boardgame = new Model_Boardgame($this->request->param('id'));

            $field = $this->request->post('field');
            $text = $this->request->post('text');

            if ($field == 'name') {
                $boardgame->set_name($text);
            }
            elseif ($field == 'description') {
                $boardgame->set_description($text);
            }
        }
    }

}
?>
