<?php

namespace BrainGamesPhp\Games\BrainPrime;

use function BrainGamesPhp\Cli\greeting;
use function BrainGamesPhp\Cli\congratulations;
use function BrainGamesPhp\Cli\correct;
use function BrainGamesPhp\Cli\error;
use function cli\line;
use function cli\prompt;

function isPrime($number): bool
{
    for ($x = 2; $x <= sqrt($number); $x++) {
        if ($number % $x == 0) {
            return false;
        }
    }
    return true;
}

function startPrimeGame(): void
{
    $name = greeting();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        line('Question: ' . $number = rand(1, 99));
        $rightAnswer = isPrime($number) ? 'yes' : 'no';
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
