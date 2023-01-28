<?php

interface p1{

   function cal($a, $b);
}
interface p2{

    function sub($c, $d);
 }

 class childClass implements p1,p2{

    function cal($a, $b){
           
        echo $a + $b;
    }
    function sub($c, $d){

        echo $c - $d;
    }

 }

 $test = new childClass();

 echo "<br>".$test->cal(10, 40);
 
 echo "<br>".$test->cal(50, 40);

 echo "<br>".$test->sub(10, 40);

?>