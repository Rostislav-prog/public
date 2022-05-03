<?php

// 5. * По введенному числу количества яблок верните правильное окончание 1 яблоко, 2 яблока, 10 яблок.

$numberOfApples = (int)readline("Сколько у вас яблок? \n ");

$tenth = $numberOfApples % 10;

if ($tenth == 1){
    $ending = "ко";
} else if ($tenth == 2 || $tenth == 3 || $tenth == 4){
    $ending = "ка";
} else {
    $ending = "к";
}

echo "У вас $numberOfApples ябло{$ending}!\n";