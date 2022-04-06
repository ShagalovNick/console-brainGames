<?php

namespace Console\Braingames\Equation;

function setQuestion($task, $myGame, $question)
{
    echo "{$question}\nQuestion: {$task}\nYour answer: ";
}

function isCorrect($rightAnswer, $userAnswer, $userQntyCorrect, $userQntyUncorrect)
{
    if ($rightAnswer === $userAnswer) {
        $userQntyCorrect += 1;
        echo "Right answer!\n";
    } else {
        $userQntyUncorrect += 1;
        echo "Uncorrect answer!\n";
    }
    return [$userQntyCorrect, $userQntyUncorrect];
}
