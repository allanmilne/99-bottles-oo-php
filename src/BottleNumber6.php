<?php
declare(strict_types=1);

final class BottleNumber6 extends BottleNumber
{
    public static function handles(int $number): bool
    {
        return $number === 6;
    }

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

BottleNumber::register(BottleNumber6::class);