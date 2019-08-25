<?php

namespace BrainGames\Games\CalcGame;

use function BrainGames\Starter\starter;

const CHARS = ["+", "-", "*"];
const MIN_VALUE = 1;
const MAX_VALUE = 100;
const TASK = "What is the resultof the expression?";

function isCalc($number_1, $number_2, $char)
{
    switch ($char) {
        case "+":
            return $number_1 + $number_2;
        case "-":
            return $number_1 - $number_2;
        case "*":
            return $number_1 * $number_2;
    }
}

function startCalcGame()
{
    $generateGame = function () {
        $number_1 = rand(MIN_VALUE, MAX_VALUE);
        $number_2 = rand(MIN_VALUE, MAX_VALUE);
        $char = CHARS[rand(0, count(SIGNS))];
        $question = "{$number_1} {$char} {$number_2}";
        $rightAnswer = isCalc($number_1, $number_2, $char);
        return [$question, $rightAnswer];
    };
    starter(TASK, $generateGame);
}
