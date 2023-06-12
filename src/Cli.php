<?php

namespace BrainGamesPhp\Cli;

use function cli\line;
use function cli\prompt;

function greeting(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function correct(): void
{
    line('Correct!');
}

function error(string $userAnswer, string $rightAnswer, string $name): void
{
    line("'$userAnswer' is wrong answer ;(. Correct answer was '$rightAnswer'.");
    line("Let's try again, $name!");
}

function congratulations(string $name): void
{
    line("Congratulations, $name!");
}
