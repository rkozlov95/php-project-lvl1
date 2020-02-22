<?php

namespace BrainGames\Utils;

function makePairQuestionAnswer($question, $answer)
{
    return [$question, $answer];
}

function getQuestion($pair)
{
    return $pair[0];
}

function getAnswer($pair)
{
    return $pair[1];
}
