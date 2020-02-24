<?php

namespace RK95\BrainGames\games;

use function RK95\BrainGames\Engine\playGame;

const PRIME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $getQuestionAnswer = function () {
        $question = rand(1, 100);
        $answer = (isPrime($question)) ? 'yes' : 'no';
        return [$question, $answer];
    };
    return playGame(PRIME_DESCRIPTION, $getQuestionAnswer);
}
