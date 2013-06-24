<?php

class Controller_Boardgame extends Controller {
    
    // Display the view for a given boardgame.

    public function action_view()
    {
        $id = $this->request->param();
        $boardgame = new Model_Boardgame($this->request->param('id'));

        if ( ! $boardgame->loaded() )
        {
            HTTP::redirect('/404');
        }

        $view = View::factory('boardgame');
        $view->boardgame = $boardgame;
        
        $this->response->body($view);
    }

    public function action_save() {
        if (HTTP_Request::POST == $this->request->method()) {
            $boardgame = new Model_Boardgame($this->request->param('id'));
            $field = $this->request->post('field');
            
            if ($field == 'name') {
                $boardgame->name = $this->request->post('text');
            }
            elseif ($field == 'description') {
                $boardgame->description = $this->request->post('text');
            }

            $boardgame->save();
        }
    }

}
?>
