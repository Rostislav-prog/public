<?php

$userName = readline("Как зовут вас пользователь?\n ");

$userTask1 = readline("Какая задача стоит перед вами сегодня?\n ");
$deadline1 = readline("Сколько минут это займет?\n ");
$userTask2 = readline("Что будешь делать дальше?\n ");
$deadline2 = readline("Сколько минут это займет?\n ");
$userTask3 = readline("А ещё?\n ");
$deadline3 = readline("Сколько минут это займет?\n ");

$toDoList = "- $userTask1, это займет $deadline1 минут\n - $userTask2, это займет $deadline2 минут\n - $userTask3, это займет $deadline3 минут";
$leadTime = floor(($deadline1 + $deadline2 + $deadline3)/60);

echo "$userName, сегодня у вас запланировано 3 приоритетных задачи на день: \n $toDoList \n";
echo "Примерное время выполнения плана = {$leadTime}ч \n";