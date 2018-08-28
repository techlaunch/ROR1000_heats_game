<?php

class Player {
    public static $count = 0;
    private $age = 0;
    public $name = "";
    public $speed = 0;
    public $accuracy = 0;
    public $score = 0;

    public function __construct ($name, $age, $speed, $accuracy) {
        $this->name = $name;
        $this->speed = $speed;
        $this->accuracy = $accuracy;
        $this->age = $age;
        Player::$count++;

        // do not allow more than 7 player on the field 
        if(Player::$count > 7) die("There cannot be more than 7 players in the field");
    }

    public function __destruct() {
        Player::$count--;
    }

    public function __toString() {
        return "{$this->name} scored {$this->score} points.";
    }

    public function thowFreeShot() {
        if(rand(1, 11) < $this->accuracy) $this->score += 3;
    }
}
