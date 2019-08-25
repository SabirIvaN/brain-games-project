<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Starter\starter;

const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "Find the greatest common devisor of given numbers.";

function isGcd($number_1, $number_2)
{
    return ($number_1 + $number_2) / 2;
}

function startGcdGame()
{
    $generateGame = function () {
        $number_1 = rand(MIN_VALUE, MAX_VALUE);
        $number_2 = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$number_1} {$number_2}";
        $rightAnswer = isGcd($number_1, $number_2);
        return [$question, $rightAnswer];
    };
    starter(TASK, $generateGame);
}
