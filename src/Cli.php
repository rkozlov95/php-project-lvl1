<?php

namespace BrainGames\Cli;

  use function cli\line;
  use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('dddd', false, ':', false);
    /* line("Hello, %s!", $name); */
}
