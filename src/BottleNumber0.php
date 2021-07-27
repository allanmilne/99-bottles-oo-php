<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class BottleNumber0 extends BottleNumber
{
    public function quantity(): string
    {
        return "no more";
    }

    #[Pure] public function action(): string
    {
        return "Go to the store and buy some more, ";
    }

    public function successor(): int
    {
        return 99;
    }
}