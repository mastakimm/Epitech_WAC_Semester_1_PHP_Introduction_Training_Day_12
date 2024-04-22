<?php

class Character
{
    public static $count;
    private $name;
    private $strength;
    private $magic;
    private $intelligence;
    private $life;

    public function __toString()
    {
        return "My name is " . $this->name . ".\n";
    }
    public function __construct($name = null, $strength = 0, $magic = 0, $intelligence = 0, $life = 100)
    {
        self::$count++;
        $this->name = ($name == null) ? "Character " . self::$count : $name;
        $this->strength = $strength;
        $this->magic = $magic;
        $this->intelligence = $magic;
        $this->life = $life;
    }
    protected function getPublicName()
    {
        return $this->name;
    }

    protected function getStrength()
    {
        return $this->strength;
    }

    protected function getMagic()
    {
        return $this->magic;
    }

    protected function getIntelligence()
    {
        return $this->intelligence;
    }

    protected function getLife()
    {
        return $this->life;
    }
}
