<?php

//This is Type-hinting and it's also called Type declareation..
/*
class team_A{
    public function cricket(){
      echo"This is Cricket team";
    }
}

class team_B{
    public function football(){
        echo"This is a Football team";
    }
}

function team(team_A $c){
    $c->cricket();
}

$obj = new team_A();
team($obj);
*/
?>


<?php

//This is Type-hinting and it's also called Type declareation.
//Prectice an Array

class school{
    public function getNames(student $names){

      foreach ($names->Names() as $name) {
       echo  $name ."<br>";
      }
    }
}

class student{
    public function Names(){

        return ["Neha","Riya","Mushkan","Pooja"];
    }
}

class library{
    
}

$lib = new library();
$stu = new student();
$sch = new school();

 $sch->getNames($stu);   //Print all the Array element.

// $sch->getNames($lib); // check an error
?>