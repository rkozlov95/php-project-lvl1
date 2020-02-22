<?php

namespace BrainGames\games;

use function BrainGames\Engine\playGame;
use function BrainGames\Utils\makePairQuestionAnswer;

const EVEN_DESC = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function runGameEven()
{
    $makeEvenGame = function () {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        return makePairQuestionAnswer($question, $answer);
    };

    return playGame(EVEN_DESC, $makeEvenGame);
}
