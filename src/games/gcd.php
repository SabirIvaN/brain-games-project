<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\engine;

const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "Find the greatest common devisor of given numbers.";

function getGcd($first, $second)
{
    return gmp_gcd($first, $second);
}

function gcdGame()
{
    $generateGame = function () {
        $first = rand(MIN_VALUE, MAX_VALUE);
        $second = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$first} {$second}";
        $rightAnswer = getGcd($first, $second);
        return [$question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
