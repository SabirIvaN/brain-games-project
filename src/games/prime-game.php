<?php

namespace BrainGames\Games\PrimeGame;

use function BrainGames\Starter\starter;

const TASK = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    $divisor = 2;

    while ($divisor <= sqrt($number)) {
        if ($number % $divisor === 0) {
            return false;
        } else {
            $divisor++;
        }
    }
    return true;
}

function startPrimeGame()
{
    $generateGame = function () {
        $question = rand(1, 100);
        $rightAnswer = isPrime($question) ? "yes" : "no";
        return [$question, $rightAnswer];
    };
    starter(TASK, $generateGame);
}
