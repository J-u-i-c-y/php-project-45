<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function evenNumber(): void
{
    $game = function () {
        $number = rand(0, 15);
        line("Question: %s", $number);
        $answer = prompt("Your answer");
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        return [$answer, $correctAnswer];
    };

    game('Answer "yes" if the number is even, otherwise answer "no".', $game);
}
