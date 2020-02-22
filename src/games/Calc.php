<?php

namespace BrainGames\games;

use function BrainGames\Engine\playGame;
use function BrainGames\Utils\makePairQuestionAnswer;

const CALC_DESC = 'What is the result of the expression?';

function getRandomSign()
{
    $signs = ['+', '-', '*'];
    $randomIndex = array_rand($signs);
    return $signs[$randomIndex];
}

function getTrueAnswer($firstNum, $sign, $secondNum)
{
    switch ($sign) {
        case '-':
            return $firstNum - $secondNum;
        case '+':
            return $firstNum + $secondNum;
        case '*':
            return $firstNum * $secondNum;
    }
    return false;
}

function runGameCalc()
{
    $makeGameCalc = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $sign = getRandomSign();
        $question = "{$firstNum} {$sign} {$secondNum}";
        $answer = getTrueAnswer($firstNum, $sign, $secondNum);
        return makePairQuestionAnswer($question, $answer);
    };
    return playGame(CALC_DESC, $makeGameCalc);
}
