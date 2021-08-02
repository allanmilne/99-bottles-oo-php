<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class BottleNumber0 extends BottleNumber
{
    public static function handles(int $number): bool
    {
        return $number === 0;
    }

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

BottleNumber::register(BottleNumber0::class);