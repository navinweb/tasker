<?php

class Task {
  public $title;
  public $description;

  public $completed = false;

  public function __construct($title, $description)
  {
    $this->title = $title;
    $this->description = $description;
  }

  public function complete()
  {
    return $this->completed = true;
  }
}

$task = new Task('Check OOP', 'Text');
echo $task->title;
echo $task->description;
echo $task->complete();
