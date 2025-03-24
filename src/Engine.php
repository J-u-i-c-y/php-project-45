<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_COUNT_ROUNDS = 3;

function game($game_description, $answers)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($game_description);


    for ($i = 0; $i < MAX_COUNT_ROUNDS; $i++) {
        [$answer, $correct_answer] = $answers();

        if ($answer === $correct_answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again!", $answer, $correct_answer);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
