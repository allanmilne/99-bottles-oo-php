<?php
declare(strict_types=1);

final class BottleNumber1 extends BottleNumber
{
    public static function handles(int $number): bool
    {
        return $number === 1;
    }

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

BottleNumber::register(BottleNumber1::class);