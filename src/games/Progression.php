<?php

namespace BrainGames\games;

use function BrainGames\Engine\playGame;
use function BrainGames\Utils\makePairQuestionAnswer;

const PROGRESSION_DESC = 'What number is missing in the progression?';

function getProgression($initialValue, $progressionStep, $progressionSize)
{
    $lastValue = ($progressionSize - 1) * $progressionStep + $initialValue;
    return range($initialValue, $lastValue, $progressionStep);
}


function prepareQuestion($progression, $randomIndex)
{
    $progression[$randomIndex] = '..';
    $question = implode(' ', $progression);
    return $question;
}

function runGameProgression()
{
    $makeGameProgression = function () {
        $progressionStep = rand(1, 10);
        $initialValue = rand(1, 10);
        $progressionSize = 10;
        $progression = getProgression($initialValue, $progressionStep, $progressionSize);
        $randomIndex = rand(1, 10);
        $answer = $progression[$randomIndex];
        $question = prepareQuestion($progression, $randomIndex);
        return makePairQuestionAnswer($question, $answer);
    };
    return playGame(PROGRESSION_DESC, $makeGameProgression);
}
