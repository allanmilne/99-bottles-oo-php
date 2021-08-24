<?php

use PHPUnit\Framework\TestCase;

class BottleNumberTest extends TestCase
{
    public function test_factory(): void
    {
        $this->assertInstanceOf(BottleNumber0::class, BottleNumber::for(0));
        $this->assertInstanceOf(BottleNumber1::class, BottleNumber::for(1));
        $this->assertInstanceOf(BottleNumber6::class, BottleNumber::for(6));

        $this->assertInstanceOf(BottleNumber::class, BottleNumber::for(21));
        $this->assertInstanceOf(BottleNumber::class, BottleNumber::for(54));
        $this->assertInstanceOf(BottleNumber::class, BottleNumber::for(99));
    }
}
