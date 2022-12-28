<?php

$a=5;//global variable

function value(){

   // $a=6; //local variable
   global $a; //use global to print global variable
    echo "print the value:".$a;
}

echo  
value();








?>