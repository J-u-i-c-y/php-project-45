<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function generateProgression($start, $step, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $currentElement = $start + $i * $step;
        $progression[] = $currentElement;
    }
    return $progression;
}

function progression()
{
    $game = function () {
        $start = rand(1, 10);
        $step = rand(1, 5);
        $length = 10;

        $progression = generateProgression($start, $step, $length);
        $hiddenIndex = rand(0, $length - 1);
        $correctAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        $expression = implode(' ', $progression);
        line("Question: %s", $expression);
        $answer = (int)prompt("Your answer");

        return [$answer, $correctAnswer];
    };

    game('What number is missing in the progression?', $game);
}
