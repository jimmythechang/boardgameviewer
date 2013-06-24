<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Model for a Boardgame.
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

    public function set_name($name) {
        $this->name = $name;
        $this->save();
    }

    public function set_description($description) {
        $this->description = $description;
        $this->save();
    }
}
?>
