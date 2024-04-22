<?php

require_once('character.class.php');
class Game
{
    private $length = 0;
    private $players;

    public function __construct()
    {
        echo "New Game !\n";
    }

    public function addPlayer($char)
    {
        $this->length++;

        echo "New player " . $char->getPublicName() . ".\n";

    }
}