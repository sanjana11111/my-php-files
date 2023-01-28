<?php

class Employee{

    //class properties
    public $name;
    public $salary;
    //Method
    //Constractor - it allows you to initialize objects.it is the code which is executed whenever a new object is instantiated.

    //without argument
        // function __construct(){

        //     echo "There is my employee:";
        // }

        //with argument
        function __construct($name, $salary){
      
            $this->name = $name;
            $this->salary = $salary;
            
        }

}

$rohan = new Employee("neha", 1000);
$sohan = new Employee("maya", 2000);
$mohan = new Employee("sonu",500);

echo "<br>This salary of $rohan->name is $rohan->salary";
echo "<br>This salary of $sohan->name is $sohan->salary";
echo "<br>This salary of $mohan->name is $mohan->salary";


?>