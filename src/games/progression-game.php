<?php

namespace BrainGames\Games\ProgressionGame;

use function BrainGames\Starter\starter;

const LENGTH = 10;
const TASK = "What number is missing in the progression?";

function isProgression($start, $different, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $different * $i;
    }
    return $progression;
}

function startProgressionGame()
{
    $generateGame = function () {
        $start = rand(1, 100);
        $different = rand(1, 100);
        $progression = isProgression($start, $different, LENGTH);
        printf($progression);
        $elementIndex = array_rand($progression);
        $rightAnswer = (string) $progression[$elementIndex];
        $progression[$elementIndex] = "..";
        $question = implode(" ", $progression);
        return [$question, $rightAnswer];
    };
    starter(TASK, $generateGame);
}
