<?php
// Method chaining

class file{

        function one(){
            echo"This is First Function<br>";
            return $this;
        }

        function two(){
            echo"This is Two Function<br>";
            return $this;
        }

        function three(){
            echo"This is Three Function<br>";
            return $this;
        }
     }

$obj = new file();

$obj->one()->two()->three();

?>