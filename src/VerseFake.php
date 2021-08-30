<?php
declare(strict_types=1);

require_once __DIR__ . "/../src/CountDownSongVerse.php";

final class VerseFake implements CountDownSongVerse
{
    public static function lyrics(int $number): string
    {
        return "This is verse {$number}.\n";
    }
}