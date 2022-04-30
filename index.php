<?php

while (true){
    $userAnswer = (int)readline("Крещение Руси произошло в 990, в 988 или в 740 году?   В ");
    if ($userAnswer == 740 || $userAnswer == 990) {
        echo "Ответ не верный, крещение Руси произошло в 988 году.\n";
        break;
    } else if ($userAnswer == 988){
        echo "Поздравляем! Это верный ответ!\n";
        break;
    }
}