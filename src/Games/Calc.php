<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function calc(): void
{
    $game = function () {
        $x = rand(1, 5);
        $y = rand(1, 5);
        $operations = ['-', '+', '*'];
        $operationsId = rand(0, count($operations) - 1);
        $operation = $operations[$operationsId];
        $expression = "{$x} {$operation} {$y}";

        line("Question: %s", $expression);
        $answer = (int) prompt("Your answer");

        switch ($operation) {
            case '+':
                $correctAnswer = $x + $y;
                break;
            case '-':
                $correctAnswer = $x - $y;
                break;
            case '*':
                $correctAnswer = $x * $y;
                break;
            default:
                throw new \Exception("Unknown operation: $operation");
        }

        return [$answer, $correctAnswer];
    };

    game('What is the result of the expression?', $game);
}
