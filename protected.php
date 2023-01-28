<?php

class Employee{

        public $name;
        public $salary;

        public function __construct($name, $salary){

            $this->name = $name;
            $this->salary = $salary;
            $this->discribe();
            // echo "only for test";   
        
        }

        protected function discribe(){

            echo"<br>Name of the programer: $this->name";
            echo"<br>Salary of the programer: $this->salary";
            
        }

    } 

       class Programmer extends Employee{

        public $lang="php";

       public function __construct($name, $lang, $salary){

        $this->name=$name;
        $this->lang=$lang;
        $this->salary=$salary;
        $this->discribe();
        echo"<br>Language of the programer: $this->lang";
       }

    }

    $neha = new Employee("neha", 5000);

    $mohan = new Programmer("mohan", "Python", 51490);

    
?>