<?php

class BottleVerse
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function lyrics(): string
    {
        $bottleNumber = BottleNumber::for($this->number);

        return
            ucfirst("$bottleNumber of beer on the wall, ") .
            "$bottleNumber of beer.\n" .
            $bottleNumber->action() .
            "{$bottleNumber->successor()} of beer on the wall.\n";
    }
}