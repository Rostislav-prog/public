<?php

$newArray = [];
$newArray[] = "Новое значение";
$newArray[] = "Еще одно";

var_dump($newArray); // разворачивает массив в консоли
print_r($newArray); // кратко разворачивает только массив в консоли

echo count($newArray); // размер массива
unset($newArray[1]); // удаляет значение массива по ключу, или любую переменную или массив
echo count($newArray);
unset($newArray); // удалили массив
// var_dump($newArray);

$newArray = [
    0 => "первое значение",
    1 => "второе значение",
    4 => null
];

print_r($newArray);

var_dump(isset($newArray[1])); //проеряет - есть ли такое значение
var_dump(isset($newArray[3]));

var_dump(array_key_exists(2, $newArray)); // проверяет - есть ли ключь 2 в массиве
var_dump(array_key_exists(0, $newArray));

var_dump($newArray[0] ?: "нет значения"); // проверка значения тернарным оператором, значение по умолчанию
var_dump($newArray[4] ?: "нет значения");

var_dump($newArray[10] ?? "нет значения"); // проверка даже в том случае, если ключ 10 отсутствует!!!

$twoRows = [  // многомерный массив
   "1й массив" => [1, 2, 3],
    "2й массив" =>[1, 2, 3 ,4]
];

print_r($twoRows[0]); // [1, 2, 3]
print_r($twoRows); // весь массив
print_r($twoRows[0][2]); // 3

$rows = [1, 2, 3, 4];

foreach ($rows as $i){ // перебор массива
    echo $i;
}

foreach ($twoRows as $i => $q){ //перебор многомерного массива
    foreach($q as $o => $p){
        echo "$i, В яйчейке $o хранится $p \n";
    }
}

$user = [
    "Rostislav",
    "Khmelinin"
];

list($n, $sn) = $user;   //присвает значения массива переменным 
var_dump($n, $sn);

[0 => $name, 1 => $sname] = $user; //краткая запись list
var_dump($name, $sname);

in_array("Rostislav", $user); //проверяет наличие значения в массиве 
var_dump(in_array("Rostislav", $user)); // true
var_dump(!in_array("Rostislav", $user)); // false

sort($user); //сортирует массив по возрастанию
var_dump($user);

$values = array_values($user); // только значения массива
$keys = array_keys($user); // только ключи массива
var_dump($values);
var_dump($keys);

$stringUser = implode(", ", $user); //массив в строку
var_dump ($stringUser);

$currentUserIndex = array_rand($user);// определяет случайный индекс массива
$currentUser = $user[$currentUserIndex];
var_dump($currentUser);

$newArray = array_merge($user,$rows); // слияние 2х массивов в один
var_dump($newArray);