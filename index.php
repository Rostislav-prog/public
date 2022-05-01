<?php

$userName = readline("Как зовут вас пользователь?\n ");
$toDoList = "";
$leadTime = 0;
$criticalTasks = 1000;

while (true){
    $howManyTasks = (int)readline("$userName, сколько задач вы запланировали на день? Ваш ответ:  ");

    toReturn:
    if ($howManyTasks && $howManyTasks < $criticalTasks) {
        for($i = 1; $i <= $howManyTasks; $i++) {

            $userTask = (string)readline("Опишите задачу № $i?\n ");

            while (true) {
                $deadline = (int)readline("Сколько часов это займет?\n ");
                if ($deadline) {
                    break;
                }
            }
            
            $toDoList .= " - $userTask, это займет $deadline ч.\n";
            $leadTime += $deadline;
        }

        echo "$userName, сегодня вами запланировано задач $howManyTasks:\n";
        echo $toDoList;
        echo "Общее время выполнения плана $leadTime ч.\n";
        break;

    } else if ($howManyTasks >= $criticalTasks){
        $howManyTasks = (int)readline("$howManyTasks задач слишком много,
 программа может зависнуть, укажите число не более $criticalTasks :  ");
        goto toReturn;
    }
}