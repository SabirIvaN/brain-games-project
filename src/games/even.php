<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Engine\engine;

const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "Answer \"yes\" if number even otherwise answer \"no\"";

function getEven($number)
{
    return $number % 2 === 0;
}

function evenGame()
{
    $generateGame = function () {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $rightAnswer = getEven($question) ? "yes" : "no";
        return [(string) $question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
