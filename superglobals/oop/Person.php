<?php

class Person {

    public  $name;
    private  $age; // cannot access outside this class
    public  $salary;

     public function __construct($name, $age, $salary){
            
        $this->name = $name;
        $this->$age = $age;
        $this->$salary = $salary;

     }

     public function getAge(){
        return $this->salary;
     }

     public function setAge($age){
        return $this->age = $age;
     }

   
}
