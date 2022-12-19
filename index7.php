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

// for( $a=0; $a <= 10; $a++)
// {
//     echo $a."<br>"; 
// }


// //4. foreach loop example array ka data retrive karne ke liye foreach ka use kiya jata hain

// $arr = [
// "html" => 1100,
// "css" => 1200,
// "js" => 1500,
// "php" => 1900,
// ];

// foreach( $arr as $course => $fee){

// echo " </br> the fees is $course is : $fee";

// }

// //using break

// for( $a=0; $a <= 10; $a++)
// {
//     if ($a == 5){
//         break;//break se print 5 tak hi hoga or loop end hojata hain
//     }
//     echo $a."<br>"; 
// }
// echo "loop ends"

//continue statment

// for( $a = 0; $a <= 10 ; $a++)
// {
//     if($a == 5)
//     {
//     continue; // continue statement ko use karne se is condition me 5 pint nhi hoga........
//     }
//     echo "$a<br>"; 
// }

//continue statement use to print odd no. & also even no.

// odd
for( $a=0; $a <= 10; $a++)
{
    if($a%2 == 0){

    continue; // continue statement ko use karne se is condition me 5 pint nhi hoga........
    }
    echo "$a<br>"; 
}
      echo"<br>...................................<br>";
      //ya fir hum iske alava != notequle ka use kr skte h
//even
for( $a=0; $a <= 10; $a++)
{
    if($a%2 == 1){

    continue; // continue statement ko use karne se is condition me 5 pint nhi hoga........
    }
    echo "$a<br>"; 
}
echo"...................<br>";
//count the printed numbers odd or evens anything you want

$count=0;

for( $a=0; $a <= 10; $a++)
{
    if($a%2 == 1){

    continue; // 
    }
    $count++;
    echo "$a<br>"; 
}
echo"...................<br>";
echo $count;

?>