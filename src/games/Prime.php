<?php

namespace BrainGames\games;

use function BrainGames\Engine\playGame;
use function BrainGames\Utils\makePairQuestionAnswer;

const PRIME_DESC = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isSimple($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGamePrime()
{
    $makeGamePrime = function () {
        $num = rand(1, 100);
        $question = $num;
        $answer = (isSimple($num)) ? 'yes' : 'no';
        return makePairQuestionAnswer($question, $answer);
    };
    return playGame(PRIME_DESC, $makeGamePrime);
}
