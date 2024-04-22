<?php

require_once('game.class.php');
require_once('character.class.php');

$game = new Game() ;
$game-> addPlayer( new Character () ) ;
echo $game->player (0) ;
$game->addPlayer ( new Character () ) ;
$game->player (0)->attack ($game->player(1)) ;
$game->addPlayer(new Character("Julien" )) ;
$game->player(2)->attack($game->player(0)) ;