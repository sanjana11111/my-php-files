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

// $a ="hello dear here i am";

// echo substr($a, 3, 4); //veriable, kaha se shuru karna hain, jaha se shuru hua hain vaha se kaha tak ki lenth ho vo print hoga

//another example

$a ="hello dear here i am  Kedarnath Dham, located in the Rudraprayag district of Uttarakhand, is one of the most paramount locations for worshipers of Shiva. The air appears to be reverberating with the name of Lord Shiva amid the mighty snow-clad peaks, enchanting meadows and forests of the lower mountain range of Himalayas. Situated in a breathtaking location, near the source of Mandakini River and at the height of 3,584 meters, Kedarnath Dham celebrates the greatness of Lord Shiva.<br> <br>Kedarnath temple is one of the 12 Jyotir Lingams and is also the most important temple among the Panch Kedars. It is also one of the significant temples of the sacred Chota Char Dham Yatra in Uttarakhand, raising the glory of the place to further heights. Accessible from major destinations of Uttarakhand, the motorable road towards Kedarnath temple stretches till Gauri Kund. After that one needs to take a 14 km trek towards Kedarnath temple.<br> <br>The hard journey till the great shrine of Shiva is well compensated with the spiritual atmosphere which is created by the unruffled, tranquil and splendid beauty of the region. The majestic Kedarnath peak (6,940 meters) stands behind the temple along with other peaks, forming a perfect setting for the holy land of the supreme deity. The conical-shaped Shiva lingam in the Kedarnath temple is a unique feature of the temple among all Shiva shrinesThe Shiva idol is welcomed back and the temple is opened again after 6 months in the Vaisakh (Apr/May) period of Hindu calendar..";

echo substr($a, 0, 323);

?>