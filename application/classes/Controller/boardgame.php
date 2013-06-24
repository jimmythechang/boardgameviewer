<?php

/**
 * Description of boardgame
 *
 * @author Jimmy
 */
class Controller_Boardgame extends Controller {
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

}
?>
