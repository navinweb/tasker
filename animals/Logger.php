<?php

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        return var_dump('file User: ' . $message);
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        return var_dump('database User: ' . $message);
    }
}

class UserController
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'John Doe';

        $this->logger->execute($user);
    }
}

$controller = new UserController(new LogToDatabase);
$controller->show();
