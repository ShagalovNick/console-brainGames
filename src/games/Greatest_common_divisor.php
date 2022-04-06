<?php

namespace Console\Braingames\Games\Greatest_common_divisor;

function task()
{
    $question = "What is greatest common divisor?";
    $a = rand(1, 12);
    $b = rand(1, 48);
    $c = min($a, $b);
    for ($i = 1; $i <= 12; $i++) {
        if (($a % $i) === 0) {
            if (($b % $i) === 0) {
                $d = $i;
            }
        }
    }
    $rightAnswer = $d;
    $task = "{$a}  {$b}";
    return [$task, $d, $question];
}
