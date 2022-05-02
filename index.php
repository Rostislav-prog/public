<?php

// 3. * Представьте, что вы ведёте счёт на пальцах одной ладони, не считая два раза подряд один и тот же,
// начиная с большого. Дойдя до мизинца, вы продолжаете счёт в обратном направлении.
// Напишите скрипт для запуска из командной строки, определяющий по введённому положительному числу палец,
// который соответствует ему по счёту. В случаях, если введено некорректное значение (меньше или равное нуля)
// повторяйте запрос ввода, пока не будет введено корректное число.

$maxInt = 1000;

while (true) {
    $userChoice = (int)readline("Введите положительное число, менее $maxInt, 
программа определит соответствующий ему палец: \n ");
    if ($userChoice && $userChoice > 0) {

        for ($i = 1; $i <= $maxInt; $i += 8){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Большому пальцу.\n";
                break 2;
            }
        }

        for ($i = 2; $i <= $maxInt; $i += 8){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Указательному пальцу.\n";
                break 2;
            }
        }

        for ($i = 8; $i <= $maxInt; $i += 8){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Указательному пальцу.\n";
                break 2;
            }
        }

        for ($i = 3; $i <= $maxInt; $i += 4){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Среднему пальцу.\n";
                break 2;
            }
        }

        for ($i = 4; $i <= $maxInt; $i += 2){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Безымянному пальцу.\n";
                break 2;
            }
        }

        for ($i = 6; $i <= $maxInt; $i += 6){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Безымянному пальцу.\n";
                break 2;
            }
        }

        for ($i = 5; $i <= $maxInt; $i += 8){
            if ($userChoice == $i){
                echo "Число $userChoice соответствует по счёту Мизинцу.\n";
                break 2;
            }
        }
    }
}