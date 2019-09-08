<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\engine;

const LENGTH = 10;
const TASK = "What number is missing in the progression?";

function getProgression($start, $different, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $different * $i;
    }
    return $progression;
}

function progressionGame()
{
    $generateGame = function () {
        $start = rand(1, 100);
        $different = rand(1, 100);
        $progression = getProgression($start, $different, LENGTH);
        $hiddenElementIndex = array_rand($progression);
        $rightAnswer = (string) $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $question = implode(" ", $progression);
        return [$question, (string) $rightAnswer];
    };
    engine(TASK, $generateGame);
}
