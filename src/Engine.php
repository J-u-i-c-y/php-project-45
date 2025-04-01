<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_COUNT_ROUNDS = 3;

function game(string $gameDescription, callable $answers): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDescription);


    for ($i = 0; $i < MAX_COUNT_ROUNDS; $i++) {
        [$answer, $correctAnswer] = $answers();

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
