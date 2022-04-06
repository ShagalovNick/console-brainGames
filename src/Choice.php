<?php

namespace Console\Braingames\Choice;

function askGame($games)
{
    echo "choose a number of game\n";
    foreach ($games as $key => $value) {
        $number = $key + 1;
        echo "{$number}. {$value}\n";
    }
    echo "Your choice? ";
    $myGame = str_replace("\n", "", fgets(STDIN));
    return $myGame;
}
