<?php


class personal{

     protected static $name="Sanjana";

     public function show(){

        echo static:: $name ;
        echo self:: $name ;

     }

}
class accounts extends personal{

      protected static $name="Goldar";

}

$text = new accounts();
$text->show();
?>