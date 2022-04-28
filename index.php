<?php

$userName = readline("Как зовут тебя пользователь?\n ");

$userYearBirth = readline("OK, в каком году ты родился, от Рождества Христова?\n ");

$userAge = date("Y") - $userYearBirth;

echo "Приветствую тебя, $userAge летний пользователь $userName !!!\n";