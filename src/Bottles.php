<?php
declare(strict_types=1);

require __DIR__ . "/../src/BottleNumber.php";
require __DIR__ . "/../src/BottleNumber0.php";
require __DIR__ . "/../src/BottleNumber1.php";

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

    /**
     * @param int $number
     * @return string
     */
    public function verse(int $number): string
    {
        $bottleNumber = BottleNumber::for($number);

        return
            ucfirst("$bottleNumber of beer on the wall, ") .
            "$bottleNumber of beer.\n" .
            $bottleNumber->action() .
            "{$bottleNumber->successor()} of beer on the wall.\n";
    }
}
