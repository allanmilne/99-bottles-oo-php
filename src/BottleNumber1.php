<?php
declare(strict_types=1);

class BottleNumber1 extends BottleNumber
{
    /**
     * @return string
     */
    public function container(): string
    {
        return "bottle";
    }

    /**
     * @return string
     */
    public function pronoun(): string
    {
        return "it";
    }
}