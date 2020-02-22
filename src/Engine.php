<?php

namespace BrainGames\Engine;

use function BrainGames\Utils\getAnswer;
use function BrainGames\Utils\getQuestion;
use function cli\line;
use function cli\prompt;

const ITERATIONS_COUNT = 3;

function ask($question)
{
    return prompt($question);
}

function playGame($description, $getDataGame)
{
    line('Welcome to the Brain Game!');
    line($description);
    $userName = ask('May I have your name?');
    line("Hello, %s!", $userName);
    $playRound = function ($counter) use (&$playRound, $getDataGame, $userName) {
        if ($counter <= 0) {
            line("Congratulations, %s!", $userName);
            return;
        }
        $gameData = $getDataGame();
        $question = getQuestion($gameData);
        $answer = getAnswer($gameData);
        line("Question: %s", $question);
        $userAnswer = ask("Your Answer");
        if ($userAnswer == $answer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $answer);
            line("Let's try again, %s", $userName);
            return;
        }
        return $playRound($counter - 1);
    };
    return $playRound(ITERATIONS_COUNT);
}
