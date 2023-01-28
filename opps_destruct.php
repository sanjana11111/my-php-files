<?php

class Employee{

 public $name;
 public $salary;

 function __construct($name, $salary){

    $this->name = $name;
    $this->salary = $salary;
 }

function __destruct(){

    echo"<br>This is destruacting:$this->name";
}

}
$n1 = new Employee("Tina", 1000);
$n2 = new Employee("Mina", 2000);
$n3 = new Employee("Rina", 3000);
$n4 = new Employee("Sona", 4000);
$n5 = new Employee("Mona", 5000);
$n6 = new Employee("Sinu", 6000);

echo "<br>Employee $n1->name salary is a $n1->salary"; 
echo "<br>Employee $n2->name salary is a $n2->salary"; 
echo "<br>Employee $n3->name salary is a $n3->salary"; 
echo "<br>Employee $n4->name salary is a $n4->salary"; 



?>