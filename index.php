<?php

require_once 'Task.php';
require_once 'User.php';

// 1. Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка.
// Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone,
// priority (int), isDone (bool) и обязательное user (User).
// В качества класса пользователя воспользуйтесь разработанным на уроке.
// Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).
// При вызове метода setDescription обновляйте значение свойства dateUpdated.
// Разработайте метод markAsDone, помечающий задачу выполненной,
// а также обновляющий свойства dateUpdated и dateDone.

$user1 = new User('Rostislav', 'khmelinin.r@gmail.com');
$user1->setAge(35);
$user1->setSex('m');
// var_dump($user1);

$task1 = new Task($user1);
$task1->setDescription('task 1');
$task1->markAsDone();
var_dump($task1);