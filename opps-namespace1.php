<?php
namespace first;
class page{

    public function __construct(){

    // echo " This is product 1 <br> ";

    $obj = new \second\page(); // hum second page ko yese first page me print karva skte hain iske liye bus hume "\" ko front me add karna hain.
   }
 }
 function wow(){
    echo "This is wow from product 1 <br>";
 }


?>