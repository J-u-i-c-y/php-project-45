<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function gcd($a, $b)
{
    return $b === 0 ? $a : gcd($b, $a % $b);
}

function gcdGame()
{
    $game = function () {
        $x = rand(1, 50);
        $y = rand(1, 50);

        $correct_answer = gcd($x, $y);
        $expression = "{$x} and {$y}";

        line("Question: %s", $expression);
        $answer = (int)prompt("Your answer");

        return [$answer, $correct_answer];
    };

    game('Find the greatest common divisor of given numbers.', $game);
}
