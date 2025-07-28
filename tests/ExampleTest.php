<?php

namespace BrainGames\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function isEven(int $num): bool
    {
        return $num % 2 === 0;
    }

    public function testExample(): void
    {
        $this->assertTrue($this->isEven(2));
        $this->assertFalse($this->isEven(3));
    }
}
