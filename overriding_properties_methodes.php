<?php

class base{
     public $name="this is a parent class ";

     function show($a, $b){
 
       return $a * $b ;

}
}
class derived extends base{

    public $name="this is a child class ";

     function show($a, $b){

        return $a + $b ;
      
     }

}

$text = new base();
echo $text->name;
echo $text->show(10, 15);

?>