<?php

namespace BrainGamesPhp\Games\BrainEven;

use function BrainGamesPhp\Cli\greeting;
use function BrainGamesPhp\Cli\congratulations;
use function BrainGamesPhp\Cli\correct;
use function BrainGamesPhp\Cli\error;
use function cli\line;
use function cli\prompt;

function startEvenGame(): void
{
    $name = greeting();
    line('What is the result of the expression?');
    for ($i = 0; $i < 3; $i++) {
        line('Question: ' . $number = rand(1, 99));
        $userAnswer = prompt('Your answer');
        $rightAnswer = $number % 2 === 0 ? 'yes' : 'no';
        if ($userAnswer == $rightAnswer) {
            correct();
        } else {
            error($userAnswer, $rightAnswer, $name);
            return;
        }
    }
    congratulations($name);
}