<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Model for a Boardgame.
 *
 * @author James
 */
class Model_Boardgame extends ORM {
    public function rules()
    {
        return array(
            'name'  => array(
                array('not_empty'),
            ),
            'description'   => array(
                array('not_empty'),
            )
        );
    }
}
?>
