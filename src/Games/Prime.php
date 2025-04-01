<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function prime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function primeGame()
{
    $game = function () {
        $number = rand(0, 15);
        line("Question: %s", $number);
        $answer = prompt("Your answer");
        $correctAnswer = prime($number) ? 'yes' : 'no';

        return [$answer, $correctAnswer];
    };

    game('Answer "yes" if given number is prime. Otherwise answer "no".', $game);
}
