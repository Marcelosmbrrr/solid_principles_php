<?php

use App\PersonController;
use App\PersonModel;

/*
- Dependencies are injected in the class through constructor
- The constructor is prepared to receive an object that implements an generic interface
- In this case, any Model that implements ModelInterface could be injected
- This is a simple example of the "D" solid principle
- A better example is a IOC container
*/

$personController = new PersonController(new PersonModel());

$personController->store([
    "name" => "James", 
    "sex" => "Male", 
    "email" => "james@gmail.com", 
    "age" => 20
]);