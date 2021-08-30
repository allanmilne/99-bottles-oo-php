<?php
declare(strict_types=1);

require_once __DIR__ . "/../src/BottleNumber.php";
require_once __DIR__ . "/../src/BottleNumber0.php";
require_once __DIR__ . "/../src/BottleNumber1.php";
require_once __DIR__ . "/../src/BottleNumber6.php";
require_once __DIR__ . "/../src/BottleVerse.php";

final class CountDownSong
{
    protected string $verseTemplate;
    protected int $max, $min;

    public function __construct(string $verseTemplate = BottleVerse::class, int $max = 999999, int $min = 0)
    {
        $this->verseTemplate = $verseTemplate;
        $this->max = $max;
        $this->min = $min;
    }

    public function song(): string
    {
        return $this->verses($this->max, $this->min);
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
        return $this->verseTemplate::lyrics($number);
    }
}
