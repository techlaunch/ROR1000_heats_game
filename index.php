<?php

// include classes
include "classes/Game.php";
include "classes/Player.php";

// create players
$bosh = new Player("Bosh", 32, 8, 9);
$allen = new Player("Ray Allen", 34, 8, 7);
$bird = new Player("Bird Man", 34, 8, 5);
$mario = new Player("Mario Chalmers", 34, 8, 6);
$haslem = new Player("Udonis Haslems", 34, 8, 5);
$neal = new Player("Shaquille O'Neal", 34, 8, 9);
$rice = new Player("Glen Rice", 34, 8, 4); 

// create the game
Game::$team = [$bosh, $allen, $bird, $mario, $haslem, $neal, $rice];
Game::$season = "2018";
Game::$match = 12;

// start game
Game::run();

// include the view
include "views/index.php";
