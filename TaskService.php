<?php

require_once 'Comment.php';
require_once 'Task.php';

class TaskService {
    public static function addComment(Task $task, Comment $comment)
    {
        $task->setComment = $comment;
    }
}