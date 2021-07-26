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
        if ($this->number === 1) {
            return "bottle";
        }

        return "bottles";
    }

    /**
     * @return string
     */
    #[Pure] public function action(): string
    {
        if ($this->number === 0) {
            return "Go to the store and buy some more, ";
        }

        return "Take " . $this->pronoun() . " down and pass it around, ";
    }

    /**
     * @return string
     */
    private function pronoun(): string
    {
        if ($this->number === 1) {
            return "it";
        }

        return "one";
    }

    /**
     * Determine the following verse number
     *
     * @return int
     */
    public function successor(): int
    {
        if ($this->number === 0) {
            return 99;
        }

        return ($this->number - 1);
    }

    #[Pure] public function __toString():string
    {
        return $this->quantity() . " " . $this->container();
    }
}