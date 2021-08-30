<?php
declare(strict_types=1);

require_once __DIR__ . "/../src/CountDownSongVerse.php";

final class BottleVerse implements CountDownSongVerse
{
    protected object $bottleNumber;

    public function __construct(object $number)
    {
        $this->bottleNumber = $number;
    }

    /**
     * @param int $number
     * @return string
     */
    public static function lyrics(int $number): string
    {
        return (new BottleVerse(BottleNumber::for($number)))->_lyrics();
    }

    /**
     * @return string
     */
    public function _lyrics(): string
    {
        return
            ucfirst("$this->bottleNumber of beer on the wall, ") .
            "$this->bottleNumber of beer.\n" .
            $this->bottleNumber->action() .
            "{$this->bottleNumber->successor()} of beer on the wall.\n";
    }
}