<?php

// 1. Подготовьте два массива одинаковой размерности, но не менее 10 элементов,
// с произвольными числовыми значениями. Разработайте скрипт для запуска из командной строки,
// выполняющий перемножение элементов двух массивов и выводящий результат в консоль с помощью print_r.
// Умножение должно выполняться только между элементами соответствующих индексов,
// то есть нулевой элемент первого массива умножается на нулевой элемент второго массива;

$array_1 = range(1, 12);
$array_2 = range(6, 17);

$array_3 = array_map(
    function ($a, $b){ return $a * $b; },
    $array_1, $array_2
);

print_r($array_3);

// 2. Разработайте скрипт для запуска из командной строки,
// генерирующий персонализированные поздравления с днём рождения.
// Подготовьте два массива: в первом храните пожелания (счастья, здоровья и т.д.),
// во втором эпитеты (бесконечного, крепкого и т.д.).
// При запуске запросите имя именинника и после ввода сгенерируйте текст поздравления,
// включающий три пожелания. Комбинации эпитетов и пожеланий должны быть случайными.
// В результате необходимо получить строку, по следующему примеру:
// «Дорогой Илон Маск, от всего сердца поздравляю тебя с днем рождения, желаю космического терпения,
// бесконечного здоровья и безудержного воображения!».
// Для реализации используйте функции array_rand и implode;
// ИЛИ сделайте генератор речи. Выведите несколько фраз.

$userName = readline("Как зовут Именинника?   ");

$wishes = ["здоровья", "везения", "добра", "счастья", "благополучия"];
$epithets = ["бесконечного", "космического", "безудержного"];

$combination = [];

for ($i = 0; $i < 3; $i++){
    $randomWishes = array_rand($wishes);
    $randomEpithets = array_rand($epithets);
    $combination[$i] = $epithets[$randomEpithets] . " " . $wishes[$randomWishes];
}

$lastEl = "и " . array_pop($combination);
$combination[] = $lastEl;

$stringCombination = implode(", ", $combination);

echo "
Дорогой $userName, от всего сердца поздравляю тебя с днем рождения,
желаю $stringCombination!\n\n";

// 3. * Подготовьте многомерный ассоциативный массив следующего вида:
// $students = [
//    'ИТ20' => [
//        'Иванов Иван' => 5,
//        'Кириллов Кирилл' => 3
//    ],
//    'БАП20' => [
//        'Антонов Антон' => 4
//    ]
// ];
// В качестве ключей массива используются названия групп.
// В качестве элементов — отношение студента и его оценки. Добавьте произвольные имена студентов
// и их оценки в обе группы. После подготовки массива, реализуйте скрипт командной строки,
// выполняющий следующие вычисления:
// a) Вычислить арифметическое среднее по всем оценкам в рамках группы.
//  Вывести на экран название группы с самым большим вычисленным значением успеваемости;
// b) Составить список на отчисление, в который попадают студенты из любой группы,
//  имеющие оценку ниже трёх. В списке студенты должны быть сгруппированы по их группе.
//   Выведите полученные данные в консоль, с помощью функции print_r;

$students = [
   'ИТ20' => [
         'Иванов Иван' => 4,
         'Иванов Алексей' => 2,
         'Сидоров Евгений' => 4,
         'Артыкула Михаил' => 5,
         'Кириллов Кирилл' => 3
            ],
   'БАП20' => [
         'Савченко Игнат' => 3,
         'Фирциков Дмитрий' => 2,
         'Усачева Татьяна' => 2,
         'Антонов Антон' => 4
            ]
];

$average = [];

foreach ($students as $group => $list){
        $average[$group] = array_sum($students[$group]) / count($students[$group]);
}

$maxAverage = (array_search(max($average), $average));

echo "Наибольшая успеваемость у группы $maxAverage.\n\n";

$badStudents = [];

foreach ($students as $group => $list){
    foreach ($list as $student => $grade){
        if ($grade < 3){
            $badStudents[] = [$group => $student];
        }
    }
}

print_r($badStudents); // что то не пойму как их сгруппировать, посмотрю разбор д.з.



