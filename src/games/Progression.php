<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const PROGRESSION_DESCRIPTION = 'What number is missing in the progression?';

function getProgression($initialValue, $step, $length)
{
    $lastValue = ($length - 1) * $step + $initialValue;
    return range($initialValue, $lastValue, $step);
}

function prepareQuestion($progression, $randomIndex)
{
    $progression[$randomIndex] = '..';
    $question = implode(' ', $progression);
    return $question;
}

function progression()
{
    $getQuestionAnswer = function () {
        $step = rand(1, 10);
        $initialValue = rand(1, 10);
        $length = 10;
        $progression = getProgression($initialValue, $step, $length);
        $randomIndex = rand(0, $length - 1);
        $answer = $progression[$randomIndex];
        $question = prepareQuestion($progression, $randomIndex);
        return [$question, $answer];
    };
    return playGame(PROGRESSION_DESCRIPTION, $getQuestionAnswer);
}
