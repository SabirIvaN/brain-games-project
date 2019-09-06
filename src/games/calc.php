<?php

namespace BrainGames\Games\CalcGame;

use function BrainGames\Engine\engine;

const SIGNS = ["+", "-", "*"];
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "What is the resultof the expression?";

function getCalc($number_1, $number_2, $sign)
{
    switch ($sign) {
        case "+":
            return $number_1 + $number_2;
        case "-":
            return $number_1 - $number_2;
        case "*":
            return $number_1 * $number_2;
    }
}

function calcGame()
{
    $generateGame = function () {
        $number_1 = rand(MIN_VALUE, MAX_VALUE);
        $number_2 = rand(MIN_VALUE, MAX_VALUE);
        $sign = SIGNS[rand(0, count(SIGNS) - 1)];
        $question = "$number_1 $sign $number_2";
        $rightAnswer = getCalc($number_1, $number_2, $sign);
        return [(string) $question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
