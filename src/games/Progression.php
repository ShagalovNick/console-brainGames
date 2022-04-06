<?php

namespace Console\Braingames\Games\Progression;

function task()
{
    $question = "What number is missing in progression?";
    
    // get progression of 6 elements
    $arrProgression = [];
    $indexProgression = rand(1, 6);
    for ($i = 1; $i < 6; $i++) {
        $arrProgression[] = $i * $indexProgression;
    }

    // get numder of hidden element
    $x = rand(1, 4);

    // get right answer and string task
    $rightAnswer = $arrProgression[$x];
    $arrProgression[$x] = '..';
    $task = implode(" ", $arrProgression);

    return [$task, $rightAnswer, $question];
}
