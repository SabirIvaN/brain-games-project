<?php

namespace BrainGames\Starter;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function starter($task, $getQuestionAnswer)
{
    line("Welcome to the Brain Games!");
    line($task);
    $userName = prompt("May I have your name?");
    line("Hello, {$userName}!");

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $rightAnswer] = $getQuestionAnswer();
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer === $rightAnswer) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer is '{$rightAnswer}'.");
            line("Let's try again '{$userName}'!");
            return;
        }
    }

      line("Congratulations, {$userName}!");
}
