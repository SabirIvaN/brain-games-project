<?php

namespace BrainGames\Games\EvenGame;

use function BrainGames\Starter\starter;

const MIN_VALUE = 1;
const MAX_VALUE = 50;
const TASK = "Answer \"yes\" if number even otherwise answer \"no\"";

function isEven($number)
{
    return $number % 2 === 0;
}

function startGameEven()
{
    $generateGame = function () {
        $question = rand(MIN_VALUE, MAX_VALUE);
        $rightAnswer = isEven($question) ? "yes" : "no";
        return [$question, $rightAnswer];
    };
    starter(TASK, $generateGame);
}
