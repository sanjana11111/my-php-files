<?php

abstract class parentClass{

public $name;

abstract protected function cal($a, $b); //only decalire method

}
 class childClass extends parentClass{

    
    public function cal($c, $d) {

         echo $c + $d;           //only implementtation method
    }
 }
 $text = new childClass();
 $text->cal(11, 11);
 

?>