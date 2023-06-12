<?php

namespace BrainGamesPhp\Games\BrainCalc;

use function BrainGamesPhp\Cli\greeting;
use function BrainGamesPhp\Cli\congratulations;
use function BrainGamesPhp\Cli\correct;
use function BrainGamesPhp\Cli\error;
use function cli\line;
use function cli\prompt;

function startCalcGame(): void
{
    $name = greeting();
    line('What is the result of the expression?');

    $operation = ['+', '-', '*'];

    for ($i = 0; $i < count($operation); $i++) {

        $number1 = rand(1, 99);
        $number2 = rand(1, 99);

        line('Question: ' . "$number1 " . $operation[$i] . " $number2");
        if ($operation[$i] === '+') {
            $rightAnswer = $number1 + $number2;
        } elseif ($operation[$i] === '-') {
            $rightAnswer = $number1 - $number2;
        } else {
            $rightAnswer = $number1 * $number2;
        }
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
