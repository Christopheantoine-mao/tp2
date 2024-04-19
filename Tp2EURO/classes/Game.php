<?php
// classes/Game.php

class Game {
    public $id;
    public $score;
    public $day;
    public $homeTeam;
    public $awayTeam;
    public $stadium;

    public function __construct($id, $day, Team $homeTeam, Team $awayTeam, Stadium $stadium, $score = null) {
        $this->id = $id;
        $this->day = $day;
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
        $this->stadium = $stadium;
        $this->score = $score;
    }
}
