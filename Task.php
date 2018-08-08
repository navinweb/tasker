<?php

class Task
{
  protected $title;
  protected $description;

  protected $completed = false;

  public function __construct($title, $description)
  {
    $this->title = $title;
    $this->description = $description;
  }

  public function complete()
  {
    return $this->completed = true;
  }

  public function getTask()
  {
    return $this->title . ' ' . $this->description;
  }

  public function setTitle($title)
  {
    if ($title == '') {
      throw new Exception("Title can not be a empty");
    }

    $this->title = $title;
  }
}

$task = new Task('Check OOP', 'Text');

echo $task->getTask();
