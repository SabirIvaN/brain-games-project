<?php

namespace BrainGames\Games\GcdGame;

use function BrainGames\Engine\engine;

const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "Find the greatest common devisor of given numbers.";

function getGcd($number_1, $number_2)
{
    return gmp_gcd($number_1, $number_2);
}

function gcdGame()
{
    $generateGame = function () {
        $number_1 = rand(MIN_VALUE, MAX_VALUE);
        $number_2 = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$number_1} {$number_2}";
        $rightAnswer = getGcd($number_1, $number_2);
        return [(string) $question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
