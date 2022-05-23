<?php

require_once 'User.php';

// 1. Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка.
// Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone,
// priority (int), isDone (bool) и обязательное user (User).
// Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).
// При вызове метода setDescription обновляйте значение свойства dateUpdated.
// Разработайте метод markAsDone, помечающий задачу выполненной,
// а также обновляющий свойства dateUpdated и dateDone.

class Task {
    private User $user; // Исполнитель
    private ?string $description; // Описание
    private ?int $priority; // Приоритет
    private ?DateTime $dateCreated; // Дата создания
    private ?DateTime $dateUpdated; // Дата обновления
    private ?DateTime $dateDone; // Дата исполнения
    private bool $isDone = false; // Исполнена или нет

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description) // При вызове метода setDescription обновляйте dateUpdated.
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }
 
    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    public function markAsDone() // помечающий задачу выполненной, обновляющий свойства dateUpdated и dateDone
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->ddateDone = new DateTime();
    }

}