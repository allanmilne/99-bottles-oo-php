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
     * @return int
     */
    public function successor(): int
    {
        return ($this->number - 1);
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