<?php

class text{

   private $first_name;
   private $last_name;

   public function setName($fname, $lname){

    $this->first_name = $fname;
    $this->last_name = $lname;

   }

   public function __call($method, $argument){

    echo "This is private or non exacting method: $method";

   }

}

$obj = new text();
$obj->setName("Sanjana","Goldar");

?>