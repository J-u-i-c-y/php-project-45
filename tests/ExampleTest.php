<?php

namespace BrainGames\Tests;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}

function testExample(): void
{
    assert(isEven(2) === true);
    assert(isEven(3) === false);
}
