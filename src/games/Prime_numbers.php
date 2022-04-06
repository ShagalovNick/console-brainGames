<?php

namespace Console\Braingames\Games\Prime_numbers;

function task()
{
    $arrTask = [];
    $question = "What is prime number?";
    $arrPrimeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];

    // get rand prime number
    $rightAnswer = $arrPrimeNumbers[array_rand($arrPrimeNumbers)];
    $i = 0;
    while ($i < 6) {
        $a = rand(1, 99);
        if (!in_array($a, $arrPrimeNumbers) && !in_array($a, $arrTask)) {
            $arrTask[] = $a;
            $i++;
        }
    }

    // get numder of hidden element
    $j = rand(0, 5);
    $arrTask[$j] = $rightAnswer;
    
    $task = implode("  ", $arrTask);
    return [$task, $rightAnswer, $question];
}
