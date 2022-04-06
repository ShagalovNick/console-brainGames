<?php

namespace Console\Braingames\User;

function hello()
{
    echo "Welcome to the Brain Game!\nMay I have your name? ";
    $userName = str_replace("\n", "", fgets(STDIN));
    echo "Hello, {$userName}!\n";
    return $userName;
}

function getUserAnswer()
{
    $userAnswer = (int) str_replace("\n", "", fgets(STDIN));
    return $userAnswer;
}
function repeatGame($userQntyCorrect, $userQntyUncorrect, $userName)
{
    if ($userQntyCorrect === 3) {
        echo "Congratulations, {$userName}\n";
    }
    echo 'Do you want to play again? (Y/N) ';
    $repeatGame = str_replace("\n", "", fgets(STDIN));
    if ($repeatGame !== 'y' && $repeatGame !== 'Y') {
        return false;
    }
    return true;
}
