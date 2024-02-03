<?php

require "Person.php";

  class Student extends Person {

    public $sid;

    public function __construct($name,$age,$sId){
          $this->sid = $sId;
          parent::__construct($name, $age, null);
    }

  }