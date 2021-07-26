<?php
declare(strict_types=1);

use JetBrains\PhpStorm\Pure;
require __DIR__ . "/../src/BottleNumber.php";
require __DIR__ . "/../src/BottleNumber0.php";

final class Bottles
{

    public function song(): string
    {
        return $this->verses(99, 0);
    }

    /**
     * Starting and ending verse numbers to sing
     *
     * @param int $upper
     * @param int $lower
     * @return string
     */
    public function verses(int $upper, int $lower): string
    {
        return implode(
            "\n",
            array_map([$this, 'verse'], range($upper, $lower))
        );
    }

    #[Pure] public function verse(int $number): string
    {
        $bottleNumber = $this->bottleNumberFor($number);
        $nextBottleNumber = $this->bottleNumberFor($bottleNumber->successor());

        return
            ucfirst("{$bottleNumber} of beer on the wall, ") .
            "{$bottleNumber} of beer.\n" .
            $bottleNumber->action() .
            "{$nextBottleNumber} of beer on the wall.\n";
    }

    public function bottleNumberFor(int $number): BottleNumber
    {
        if ($number === 0) {
            $className = BottleNumber0::class;
        } else {
            $className = BottleNumber::class;
        }

        return new $className($number);
    }
}
