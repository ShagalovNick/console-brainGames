<?php

namespace Console\Braingames\Games\Even_number;

function task()
{
    $question = "What number is even?";
    $a = rand(1, 7) * 2;
    $b = rand(1, 7) * 2 - 1;
    $task = "{$a}  {$b}";
    $rightAnswer = $a;
    return [$task, $rightAnswer, $question];
}
