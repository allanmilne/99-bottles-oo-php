<?php
declare(strict_types=1);

class BottleNumber6 extends BottleNumber
{
    /**
     * @return string
     */
    public function container(): string
    {
        return "six-pack";
    }

    /**
     * Mapping between the value of a number and the string that gets sung
     *
     * @return string
     */
    public function quantity(): string
    {
        return "1";
    }
}