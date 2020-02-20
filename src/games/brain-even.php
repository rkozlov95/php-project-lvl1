<?php

namespace BrainGames\games;

use function BrainGames\Engine\getRandomNum;
use function BrainGames\Engine\makePairQuestionAnswer;
use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

$makeEvenGame = function () {
    $question = getRandomNum(1, 100);
    $answer = isEven($question) ? 'yes' : 'no';
    return makePairQuestionAnswer($question, $answer);
};

function runGameEven()
{
    $makeEvenGame = function () {
        $question = getRandomNum(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return makePairQuestionAnswer($question, $answer);
    };

    return playGame(DESCRIPTION, $makeEvenGame);
}
