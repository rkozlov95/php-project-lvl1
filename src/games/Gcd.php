<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const GCD_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getNode($firstNum, $secondNum)
{
    while ($firstNum !== $secondNum) {
        if ($firstNum > $secondNum) {
            $firstNum = $firstNum - $secondNum;
        } else {
            $secondNum = $secondNum - $firstNum;
        }
    }
    return $firstNum;
}

function gcd()
{
    $getQuestionAnswer = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $question = "{$firstNum} {$secondNum}";
        $answer = getNode($firstNum, $secondNum);
        return [$question, $answer];
    };
    return playGame(GCD_DESCRIPTION, $getQuestionAnswer);
}
