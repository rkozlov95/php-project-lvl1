<?php

namespace RK95\BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ITERATIONS_COUNT = 3;

function playGame($description, $getQuestionAnswer)
{
    line('Welcome to the Brain Game!');
    line($description);
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    for ($i = 0; $i < ITERATIONS_COUNT; $i++) {
        [$question, $answer] = $getQuestionAnswer();
        line("Question: %s", $question);
        $userAnswer = prompt("Your Answer");
        if ($userAnswer != $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            line("Let's try again, %s", $userName);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $userName);
    return;
}
