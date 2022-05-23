<?php

// В качества класса пользователя воспользуйтесь разработанным на уроке.

class User {
    private $username;
    private $email;
    private $sex;
    private $age;
    private $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email)
    {
       $this->username = $username;
       $this->email = $email;

       $this->dateCreated = new DateTime();
    }

    function getUsername(): string
    {
       return $this->username ?? 'unknown';
    }

    function setAge(?int $age): void
    {
       if ($age == null) {
           $this->age = null;
       } elseif ($age > 0 && $age <= 125) {
           $this->age = $age;
       }
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex)
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