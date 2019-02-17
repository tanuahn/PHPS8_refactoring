<?php

include ('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore( 0, 4);

echo $tennisGame;