<?php

interface Logger {}

class LogToFile {

    public function execute($message){

        var_dump('log the message to a file');

    }

}

class LogToDatabase {

    public function execute($message){

        var_dump('log the message to a database');

    }

}

class UsersController {

    public function show(){

        $user = "JohnDoe";

        // Log This information

    }

}