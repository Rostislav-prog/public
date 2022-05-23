<?php

// В качества класса пользователя воспользуйтесь разработанным на уроке.

class User {
    private $username;
    private $email;
    private $sex;
    private $age;
    private $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email) // функция конструктор
    {
       $this->username = $username;
       $this->email = $email;

       $this->dateCreated = new DateTime(); // Текущие дата и время
    }

    function getUsername(): string // функция для четения имени из обьекта
    {
       return $this->username ?? 'unknown';
    }

    function setAge(?int $age): void // функция для записи возраста в обьект
    {
       if ($age == null) {
           $this->age = null;
       } elseif ($age > 0 && $age <= 125) {
           $this->age = $age;
       }
    }

    public function getAge(): ?int // функция для четения возраста из обьекта
    {
        return $this->age;
    }

    public function getSex(): ?string // прочитать пол
    {
        return $this->sex;
    }

    public function setSex(?string $sex) // записать пол
    {
        $this->sex = $sex;

    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive)
    {
        $this->isActive = $isActive;

    }
}