<?php

//php user functions

function entry($age){
    if($age >=18 && $age <= 65){

        
       return "you are in";
    
    }else{

       return "you are out";
    }
}


echo "your age 45:"."\n". entry(45) . "<br>";

echo "your age 15:"."\n". entry(15) . "<br>";



?>