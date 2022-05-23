<?php

require_once 'User.php';

class Task {
    private User $user;
    private ?string $description;
    private ?int $priority;
    private ?DateTime $dateCreated;
    private ?DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private bool $isDone = false;
    private Comment $comment;

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

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function markAsDone() // помечающий задачу выполненной, обновляющий свойства dateUpdated и dateDone
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }
}