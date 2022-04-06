<?php

require_once __DIR__ . '/vendor/autoload.php';

use Console\Braingames\Equation;
use Console\Braingames\User;
use Console\Braingames\Choice;

$games = [];
$games[0] = 'Progression';
$games[1] = 'Calculator';
$games[2] = 'Even_number';
$games[3] = 'Greatest_common_divisor';
$games[4] = 'Prime_numbers';

$userName = User\hello();
$myGame = Choice\askGame($games);

// index of game at array $games
$myGame = $games[$myGame - 1];

// for dinamic function to rule of game
$func = "\Console\Braingames\Games\\{$myGame}\\task";

$gameRepeat = true;
while ($gameRepeat === true) {

    (int) $userQntyCorrect = 0;
    (int) $userQntyUncorrect = 0;

while ($userQntyCorrect < 3 && $userQntyUncorrect < 1) {

    [$task, $rightAnswer, $question] = $func();

    Equation\setQuestion($task, $myGame, $question);
    $userAnswer = User\getUserAnswer();
    [$userQntyCorrect, $userQntyUncorrect] = Equation\isCorrect($rightAnswer, $userAnswer, $userQntyCorrect, $userQntyUncorrect);
}

$gameRepeat = User\repeatGame($userQntyCorrect, $userQntyUncorrect, $userName);

}
