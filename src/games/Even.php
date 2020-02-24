<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const EVEN_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function even()
{
    $getQuestionAnswer = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    return playGame(EVEN_DESCRIPTION, $getQuestionAnswer);
}
