<?php

namespace BrainGames\Cli;

function run()
{
    \cli\line('Welcome to the Brain Game!');
    $name = \cli\prompt('dddd', false, ':', false);
    \cli\line("Hello, %s!", $name);
}
