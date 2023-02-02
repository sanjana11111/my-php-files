<?php

class student{

    private $name;
    
    public function hye(){

       echo $this->name;
    }

   public function __get($property){
    echo "You are Traying to Access non Exicting or private property($property)<br>";

    }

    public function __set($property, $value){

            if(property_exists($this, $property)){
                
                    $this->$property = $value;
            }else{

                echo"property dose not exist : $property";
            }
      }
}

$obj = new student();

$obj->name = "Sanjana"; //  It show's set method's echo 

$obj->hye(); // access modifier private hone par bhi agr hume value alg se print karani hai to ek new function create kar usko call karne par __set method ke if(property_exists) true ho jayega or jo value humne object me define kari hain use echo kar dega . 

?>