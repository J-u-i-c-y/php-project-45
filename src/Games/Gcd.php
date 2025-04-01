<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function gcd(int $a, int $b): int
{
    return $b === 0 ? $a : gcd($b, $a % $b);
}

function gcdGame()
{
    $game = function () {
        $x = rand(1, 50);
        $y = rand(1, 50);

        $correctAnswer = gcd($x, $y);
        $expression = "{$x} {$y}";

        line("Question: %s", $expression);
        $answer = (int)prompt("Your answer");

        return [$answer, $correctAnswer];
    };

    game('Find the greatest common divisor of given numbers.', $game);
}
