<?php

class Person{

    public static $age =1;

    public function haveBirthday(){
        static::$age +=1;
    }

}

$joe = new Person;
$joe->haveBirthday();

echo Person::$age;
