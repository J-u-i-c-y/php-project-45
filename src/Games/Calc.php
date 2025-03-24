<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function calc()
{
    $game = function () {
        $x = rand(1, 5);
        $y = rand(1, 5);
        $operations = ['-', '+', '*'];
        $operations_id = rand(0, count($operations) - 1);
        $operation = $operations[$operations_id];
        $expression = "{$x} {$operation} {$y}";

        line("Question: %s", $expression);
        $answer = (int)prompt("Your answer");
        $correct_answer = eval("return $expression;");

        return [$answer, $correct_answer];
    };

    game('What is the result of the expression?', $game);
}
