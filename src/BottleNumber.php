<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class BottleNumber
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * BottleNumber factory
     *
     * @param $number
     * @return BottleNumber
     */
    public static function for($number): BottleNumber
    {
        $className = match ($number) {
            0 => BottleNumber0::class,
            1 => BottleNumber1::class,
            default => BottleNumber::class,
        };
        return new $className($number);
    }

    /**
     * @return string
     */
    #[Pure] public function action(): string
    {
        return "Take " . $this->pronoun() . " down and pass it around, ";
    }

    /**
     * @return string
     */
    public function pronoun(): string
    {
        return "one";
    }

    /**
     * Determine the following verse number
     *
     * @return BottleNumber
     */
    public function successor(): BottleNumber
    {
        return BottleNumber::for($this->number - 1);
    }

    #[Pure] public function __toString(): string
    {
        return $this->quantity() . " " . $this->container();
    }

    /**
     * Mapping between the value of a number and the string that gets sung
     *
     * @return string
     */
    public function quantity(): string
    {
        return (string)$this->number;
    }

    /**
     * @return string
     */
    public function container(): string
    {
        return "bottles";
    }
}