<?php

function helloWorld() // бьявление функции
{
  echo "Hello, world\n";
}

helloWorld(); // вызов функции

function greet($name = "Пользователь") { // $name - аргумент функции, "Пользователь" - значение по умолчанию
  echo "Приветствую, $name\n";
  return "Приветствую, $name\n"; // возврат значения
}

greet('Иван'); // Приветствую, Иван
echo greet('Иван'); // Приветствую, Иван

function Arr(...$arr) // собирает массив аргументов
{
  return $arr;
}

print_r(Arr("h", "j", 3, 7)); // ["h", "j", 3, 7];

function AndAnd(&$i) // обращение к аргументу, меняя его.
{
    $i++;
    // return $i;
}

$count = 5;
AndAnd($count);
echo $count; // 6

function readNumber($message): ?int // типизация под числовые значения ? - функция может вообще ничего не вернуть
{
   while (!$number = (int)readline($message)) {
       echo "Пожалуйста, введите корректное числовое значение\n";
   }

   return $number;
}

// Применяемые типы :
// int
// float
// string
// bool
// array

function gree($name = null, $repeat = 1): void // функция без return - типизация
{
 for ($i = 0; $i < $repeat; $i++) {
    if ($name == null) {
       echo "Приветствую\n";
    } else {
       echo "Приветствую, $name\n";
    }
 }
}

function readNumb(string $message): int // типизация аргумента функции
{
  while (!$number = (int)readline($message)) {
      echo "Пожалуйста, введите корректное числовое значение\n";
  }

  return $number;
}

$greet = function (string $name): void { // анонимная функция с типизацией
   echo "Приветствую, $name\n";
};

$divideFunction = function (int $number) {
  return $number / 2;
};

$numbers = [2, 3, 5, 6, 8, 10];
$result = array_map($divideFunction, $numbers); // $divideFunction - замыкиние функции array_map

function readNonEmptyLine(string $message, Closure $onError): string // для анонимной функции типизация - Closure
{
 while (!$line = readline($message)) {
    $onError(); // Вызываем наше замыкание
 }                           

 return $line;
}

$number = readNumber('Введите число', function ($input) use ($name) { //добавление внешних переменных для функции                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
  echo "$name, введите число\n";
});

function countdown(int $number = 10): void
{
  echo "$number\n";

  $number--;
  if ($number > 0) {
     countdown($number); // Вызываем ту же самую функцию. Рекурсия
  }
}

require 'functions.php'; // подключение файла

// Выражения импорта:
// include выполняет нестрогое подключение файла и его выполнение.
//  «Нестрогое» означает, что если этого файл на будет существовать,
//   работа программы не прервется, а будет «выброшено» предупреждение.
// include_once выполнит подключение не более одного раза.
// require — более строгое выражение подключения. Оно гарантирует импорт файла,
//  и в случаях, если его нет или его невозможно подключить (ошибка доступа),
//   будет «выброшена» фатальная ошибка, которая остановит выполнение скрипта.
// require_once  выполняет строгое подключение файла не более чем один раз.
