<?php

namespace BrainGamesPhp\Engine;

use function BrainGamesPhp\Games\BrainEven\startEvenGame;
use function BrainGamesPhp\Games\BrainCalc\startCalcGame;
use function BrainGamesPhp\Games\BrainGames\startBrainGames;
use function BrainGamesPhp\Games\BrainGcd\startGcdGame;
use function BrainGamesPhp\Games\BrainPrime\startPrimeGame;
use function BrainGamesPhp\Games\BrainPrime\startProgressionGame;
use function cli\line;
use function cli\prompt;

function runGame($gameName)
{
    if ($gameName == 'brain-games') {
        startBrainGames();
    } elseif ($gameName == 'brain-even') {
        startEvenGame();
    } elseif ($gameName == 'brain-calc') {
        startCalcGame();
    } elseif ($gameName == 'brain-gcd') {
        startGcdGame();
    } elseif ($gameName == 'brain-prime') {
        startPrimeGame();
    } elseif ($gameName == 'brain-progression') {
        startProgressionGame();
    }
}
