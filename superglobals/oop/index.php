<?php

// What is class and instance

require_once 'Student.php';

// Instance

// When ever we call the instance __construct() function runs;

$tillal = new Student("Tillal", 37, 1234);


var_dump($tillal);

// Without Constructors

// $tillal->name = "Tillal";
// $tillal->name = 37;
// $tillal->salary = 226000;
