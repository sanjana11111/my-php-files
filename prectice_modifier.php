<?php

class base{

    protected $name;

    public function __construct($n){
        $this->name = $n;
    }
    protected function show(){

    echo "Your Name : " .$this->name ."<br> ";

 }

}
class derived extends base{

    public function show(){

        echo "Your Name : " .$this->name ."<br> ";
    
     }

}
$p1 = new derived("Sanjana Goldar");

// $p1->name ="Goldar Sanjana";//Over right
 $p1->show();
?>