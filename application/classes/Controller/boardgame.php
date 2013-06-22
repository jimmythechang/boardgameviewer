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
        $boardgame = ORM::factory('boardgame')->where('id', '=', $id);
    }
}
?>
