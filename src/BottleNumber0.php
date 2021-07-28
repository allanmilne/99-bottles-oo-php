<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class BottleNumber0 extends BottleNumber
{
    /**
     * @return string
     */
    public function quantity(): string
    {
        return "no more";
    }

    /**
     * @return string
     */
    #[Pure] public function action(): string
    {
        return "Go to the store and buy some more, ";
    }

    /**
     * @return BottleNumber
     */
    public function successor(): BottleNumber
    {
        return BottleNumber::for(99);
    }
}