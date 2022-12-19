<?php
//loops - while, do-while, for, foreach loop in there

//1. while loop example it's a entry control loop

// $a=1;

// while($a <= 10){

// echo $a."<br>";

// $a++;

// }

//  echo "its terminate now","<br>";

// //print a table
// $a=1;
// $tab=5;
// while($a <= 10){

// echo $a*$tab."<br>";

// $a++;

// }

// echo "its terminate now";


//2. do-while loop example it's a exit control loop

// $a=0;
// do{
//     echo $a."<br>"; 
//     $a++;
// }while($a <= 10);


//3. for loop example it's a entry control loop

for( $a=0; $a <= 10; $a++)
{
    echo $a."<br>"; 
}


//4. foreach loop example it's a array 

$arr = [
"html" => 1100,
"css" => 1200,
"js" => 1500,
"php" => 1900,
];

foreach( $arr as $course => $fee){

echo " </br> the fees is $course is : $fee";

}


?>