<?php

//conditional statement

$age = 37;

//if statement

// if($age >= 18){

//     echo"Yes you can vote";
// }

//if-else statement

// if($age >= 18){
//     echo"Yes you can vote";
// }else{
//     echo"No you cannot vote";
// }

//if-elseif statement

// if($age >= 18){

//     echo"Yes you can vote";
// }elseif($age==17){
//     echo"Not now you can wait one more year";
// }else{

//     echo"No you cannot vote";
// }


//nested if-else statement
if($age >= 18){
    if($age <= 65){
    echo"Yes you can vote";
}
    else{
        echo"No you cannot vote anymore";
    }
}elseif($age==17){
    echo"Not now you can wait one more year";
}else{

    echo"No you cannot vote";
}


?>