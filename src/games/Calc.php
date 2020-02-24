<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const CALC_DESCRIPTION = 'What is the result of the expression?';
const SIGNS = ['+', '-', '*'];

function getRandomSign()
{
    $randomIndex = array_rand(SIGNS);
    return SIGNS[$randomIndex];
}

function calculate($sign, $firstNum, $secondNum)
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

function calc()
{
    $getQuestionAnswer = function () {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        $sign = getRandomSign();
        $question = "{$firstNum} {$sign} {$secondNum}";
        $answer = calculate($sign, $firstNum, $secondNum);
        return [$question, $answer];
    };
    return playGame(CALC_DESCRIPTION, $getQuestionAnswer);
}
