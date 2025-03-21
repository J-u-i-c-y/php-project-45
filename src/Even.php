<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function evenNumber()
{
    $attempts = 0;
    $maxAttempts = 3;

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');
    while ($attempts < $maxAttempts) {
        $number = rand(0, 15);
        line("Question: %s", $number);
        $answer = prompt("Your answer");
        $is_even_number = $number % 2 === 0;
        $correct_answer = $is_even_number ? 'yes' : 'no';

        if ($answer === $correct_answer) {
            line("Correct!");
            $attempts++;
            if ($attempts === $maxAttempts) {
                line("Congratulations, {$name}!");
            }
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.\nLet's try again!", $answer, $correct_answer);
            return;
        }
    }
}