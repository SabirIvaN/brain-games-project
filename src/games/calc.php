<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\engine;

const SIGNS = ["+", "-", "*"];
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "What is the resultof the expression?";

function getCalc($first, $second, $sign)
{
    switch ($sign) {
        case "+":
            return $first + $second;
        case "-":
            return $first - $second;
        case "*":
            return $first * $second;
    }
}

function calcGame()
{
    $generateGame = function () {
        $first = rand(MIN_VALUE, MAX_VALUE);
        $second = rand(MIN_VALUE, MAX_VALUE);
        $sign = SIGNS[rand(0, count(SIGNS) - 1)];
        $question = "$first $sign $second";
        $rightAnswer = getCalc($first, $second, $sign);
        return [$question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
