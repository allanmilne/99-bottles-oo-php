<?php
declare(strict_types=1);

require __DIR__ . "/../src/BottleNumber.php";
require __DIR__ . "/../src/BottleNumber0.php";
require __DIR__ . "/../src/BottleNumber1.php";
require __DIR__ . "/../src/BottleNumber6.php";
require __DIR__ . "/../src/BottleVerse.php";

final class Bottles
{
    protected string $verseTemplate;

    public function __construct(string $verseTemplate = BottleVerse::class)
    {
        $this->verseTemplate = $verseTemplate;
    }

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
         return (new $this->verseTemplate($number))->lyrics();
    }
}
