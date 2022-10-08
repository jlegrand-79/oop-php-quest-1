<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age)
    {
        echo nl2br("$firstName $lastName a $age ans." . PHP_EOL);
    }
}