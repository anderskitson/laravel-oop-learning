<?php

interface Logger {

    public function execute($message);


}

class LogToFile implements Logger {

    public function execute($message){

        var_dump('log the message to a file');

    }

}


class LogToDatabase implements Logger {

    public function execute($message){

        var_dump('log the message to a database:' . $message);

    }

}

class UsersController {

    protected $logger;

    public function __construct(Logger $logger)
    {

        $this->logger = $logger;

    }

    public function show(){

        $user = "JohnDoe";

        // Log This information

        $this->logger->execute($user);

    }

}

$controller = new UsersController(new LogToDatabase);

$controller->show();