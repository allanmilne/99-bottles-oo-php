<?php

use PHPUnit\Framework\TestCase;

class BottleVerseTest extends TestCase
{
    public function test_verse_general_rule_upper_bound(): void
    {
        $expected =
            "99 bottles of beer on the wall, " .
            "99 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "98 bottles of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(99));
    }

    public function test_verse_general_rule_lower_bound(): void
    {
        $expected =
            "3 bottles of beer on the wall, " .
            "3 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "2 bottles of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(3));
    }

    public function test_verse_2(): void
    {
        $expected =
            "2 bottles of beer on the wall, " .
            "2 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "1 bottle of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(2));
    }

    public function test_verse_7(): void
    {
        $expected =
            "7 bottles of beer on the wall, " .
            "7 bottles of beer.\n" .
            "Take one down and pass it around, " .
            "1 six-pack of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(7));
    }

    public function test_verse_6(): void
    {
        $expected =
            "1 six-pack of beer on the wall, " .
            "1 six-pack of beer.\n" .
            "Take one down and pass it around, " .
            "5 bottles of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(6));
    }

    public function test_verse_1(): void
    {
        $expected =
            "1 bottle of beer on the wall, " .
            "1 bottle of beer.\n" .
            "Take it down and pass it around, " .
            "no more bottles of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(1));
    }

    public function test_verse_0(): void
    {
        $expected =
            "No more bottles of beer on the wall, " .
            "no more bottles of beer.\n" .
            "Go to the store and buy some more, " .
            "99 bottles of beer on the wall.\n";

        self::assertEquals($expected, BottleVerse::lyrics(0));
    }
}
