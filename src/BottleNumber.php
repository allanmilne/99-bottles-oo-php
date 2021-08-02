<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;

class BottleNumber
{
    protected static array $registry = [];
    protected int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public static function register(string $candidate): void
    {
        array_unshift(self::$registry, $candidate);
    }

    public static function handles(int $number): bool
    {
        return true;
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

    /**
     * BottleNumber factory
     *
     * @param int $number
     * @return BottleNumber
     */
    public static function for(int $number): BottleNumber
    {
        foreach (self::$registry as $candidate) {
            if ($candidate::handles($number)) {
                return new $candidate($number);
            }
        }
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

BottleNumber::register(BottleNumber::class);