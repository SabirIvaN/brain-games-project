<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\engine;

const TASK = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function getPrime($number)
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

function primeGame()
{
    $generateGame = function () {
        $question = rand(1, 100);
        $rightAnswer = getPrime($question) ? "yes" : "no";
        return [$question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
