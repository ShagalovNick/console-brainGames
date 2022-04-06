<?php

namespace Console\Braingames\Games\Calculator;

function task()
{
    $question = "What is result?";
    $a = rand(1, 8);
    $b = rand(1, 6);
    $d = rand(1, 6);

    // 3 type of tasks
    $i = rand(0, 2);
    if ($i === 0) {
        $task = "{$a} + {$b} * {$d}";
        $rightAnswer = $a + $b * $d;
    }
    elseif ($i === 1) {
        $task = "{$a} - {$b} * {$d}";
        $rightAnswer = $a - $b * $d;
    } else {
        $task = "{$a} * {$b} - {$d}";
        $rightAnswer = $a * $b - $d;
    }
    return [$task, $rightAnswer, $question];
}
