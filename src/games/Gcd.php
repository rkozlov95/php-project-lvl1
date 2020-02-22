<?php

namespace BrainGames\games;

use function BrainGames\Engine\playGame;
use function BrainGames\Utils\makePairQuestionAnswer;

const GCD_DESC = 'Find the greatest common divisor of given numbers.';

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

function runGameGcd()
{
    $makeGameGcd = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $question = "{$firstNum} {$secondNum}";
        $answer = getNode($firstNum, $secondNum);
        return makePairQuestionAnswer($question, $answer);
    };
    return playGame(GCD_DESC, $makeGameGcd);
}
