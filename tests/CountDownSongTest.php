<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/CountDownSong.php";
require_once __DIR__ . "/../src/VerseFake.php";

class CountDownSongTest extends TestCase
{
    public function test_verse():void
    {
        $expected =
            "This is verse 500.\n";

        self::assertEquals($expected, (new CountDownSong(VerseFake::class))->verse(500));
    }

    public function test_verses(): void
    {
        $expected =
            "This is verse 99.\n" .
            "\n" .
            "This is verse 98.\n" .
            "\n" .
            "This is verse 97.\n";

        self::assertEquals($expected, (new CountDownSong(VerseFake::class))->verses(99, 97));
    }

    public function test_song(): void
    {
        $expected =
            "This is verse 47.\n".
            "\n" .
            "This is verse 46.\n".
            "\n" .
            "This is verse 45.\n".
            "\n" .
            "This is verse 44.\n".
            "\n" .
            "This is verse 43.\n";

        self::assertEquals($expected, (new CountDownSong(VerseFake::class, 47, 43))->song());
    }
}
