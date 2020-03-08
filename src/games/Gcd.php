<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const GCD_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd($firstNum, $secondNum)
{
    $num1 = $firstNum;
    $num2 = $secondNum;
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return $num1;
}

function gcd()
{
    $getQuestionAnswer = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $question = "{$firstNum} {$secondNum}";
        $answer = getGcd($firstNum, $secondNum);
        return [$question, $answer];
    };
    return playGame(GCD_DESCRIPTION, $getQuestionAnswer);
}
