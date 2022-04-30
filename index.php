<?php

$userName = readline("Как зовут вас пользователь?\n ");
$deadlineTemplate = "Сколько времени это займет?\n ";

$userTask1 = readline("Какая задача стоит перед вами сегодня?\n ");
$deadline1 = readline($deadlineTemplate);

$userTask2 = readline("Что будешь делать дальше?\n ");
$deadline2 = readline($deadlineTemplate);

$userTask3 = readline("А ещё?\n ");
$deadline3 = readline($deadlineTemplate);

$toDoList = "
- $userTask1, это займет $deadline1 минут\n
- $userTask2, это займет $deadline2 минут\n
- $userTask3, это займет $deadline3 минут\n";

$leadTime = ($deadline1 + $deadline2 + $deadline3);

echo "$userName, сегодня у вас запланировано 3 приоритетных задачи на день: \n $toDoList \n";
echo "Примерное время выполнения плана = {$leadTime}ч \n";