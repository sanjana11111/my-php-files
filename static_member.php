<?php

        class base{
        public static $name = "Sanjana Goldar";


        // function __construct($n){
 
        //     self::$name=$n;

        // }
    }
        class derived extends base{

            static function show(){

                echo parent::$name;
            }

        }

        
     

        // $test = new base("Wow!!!!!!!"); >>>>>>>> for construct
        
        $test = new derived();
        $test->show();

?>