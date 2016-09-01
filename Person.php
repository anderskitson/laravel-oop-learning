<?php

class Person{

    private $name;

    private $age;

    Public function __construct($name){
        $this->name = $name;
    }

    Public function getAge(){
        return $this->age * 365;
    }

    Public function setAge($age){

        if ($age < 18){
            throw new Exception("Person is not old Enough");
        }

        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge(30);
$john->age = 8;

var_dump($john->getAge());