<?php

require "BirdController.php";
require "Bird.php";

$birdController = new BirdController;
$bird = $birdController->random_bird();
echo $bird->wikipedia_URL();
