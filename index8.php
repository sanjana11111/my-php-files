<?php

//swich statement
// $x = 10;

// switch ($x) {
//     case 8:
//         echo "varriable x is 8";
//         break;
       
//         case 6:
//     echo "varriable x is not 6";
//         break;
    
//     default:
//     echo "varriable x is not 8 $ not 6";
//         break;
// }

//switch statement working proccess
//example

// $age = 17;

// switch ($age) {
//     case ($age >= 18 && $age <=65):
//         echo "Yes you can vote";
//         break;

//         case (18 - $age == 1 || 18 - $age == 2):
//             echo "You can vote when you turn 18";
//             break;

//         case ($age >= 0 && $age <=15):
//             echo "You are not capeble for vote";
//             break;
        
//             case ($age >= 66 && $age <=150):
//                 echo "You will never be able to vote again";
//                 break;
            
//              default:
//               echo "No you can not vote";
//              break;
// }


//recursion function
                      //function me khud ko call karna

 //example
 
//  $i = 0;
//  function num($i){

//     if ($i <= 100){
//     echo "<br> $i";
//     $i++;
//     num($i); 
// }    
//  }
 
//  num($i);



//Implode function example

// $arr = [
//  "Hello",
//  "my",
//  "name",
//  "is",
//  "sanjana"];
 

//  $str = implode (" ",$arr);

//     echo $str;



//Explodefunction example

// $str ="this is me and i'm here";
// echo "$str";

// //(sepretar,variable,limit)
// $arr = explode(" ",$str,3);  //agr me limit ki value 3 karti hu to mujhe apna data ka output 3 key me milega............................

// echo"<pre>";
// print_r($arr);
// echo"</pre>";


//case changing methode

// $tom ="i love tom and jerry";

// echo strtolower($tom)."<br>";//converts a string to lowercase.

// echo strtoupper($tom)."<br>";//conver a string to uppercase.

// echo lcfirst($tom)."<br>";//convert the first character of a string to lowercase.

// echo ucfirst($tom)."<br>";//conver the first cheracter of a sring to uppercase.

// echo ucwords($tom)."<br>";//converts the first character of each word in a string to uppercase.


//str_replace()


// $p = "this is a simple sentence";

// echo str_replace("this", "it" , $p)."<br/>"; // this str_replace function replace the word what is given and change the  word given by me....

// echo $p;

//strrev()
//string reverse function

// $a ="this is my page";

// echo strrev($a);

//substr()
//this is called substring function

$a ="hello dear here i am";

echo substr($a, 3, 4); //veriable, kaha se shuru karna hain, jaha se shuru hua hain vaha se kaha tak ki lenth ho vo print hoga


?>