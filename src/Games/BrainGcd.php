<?php

namespace BrainGamesPhp\Games\BrainGcd;

use function BrainGamesPhp\Cli\greeting;
use function BrainGamesPhp\Cli\congratulations;
use function BrainGamesPhp\Cli\correct;
use function BrainGamesPhp\Cli\error;
use function cli\line;
use function cli\prompt;

function gcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    return $a;
}

function startGcdGame(): void
{
    $name = greeting();
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i < 3; $i++) {

        $number1 = rand(1, 99);
        $number2 = rand(1, 99);

        line('Question: ' . "$number1 " . "$number2");
        $rightAnswer = gcd($number1, $number2);
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $rightAnswer) {
            correct();
        } else {
            error($userAnswer, $rightAnswer, $name);
            return;
        }
    }
    congratulations($name);
}
