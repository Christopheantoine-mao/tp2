<?php
// classes/Team.php
class Team {
    public $id;
    public $name;
    public $points;

    public function __construct($id, $name, $points = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->points = $points;
    }
}
?>
