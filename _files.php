<?php

//file ko read kese kiya jata hain  is function

// $file = readfile("textfile.txt"); //this function is also count the characters in number and print the numbers in the end of sentences.
// echo $file;


// readfile("textfile.txt"); //it's only print the given sentence.
// readfile("blank.png")
// readfile("about.php")

// $fp =fopen("textfile.txt","r");//writen value resource or false
// // echo var_dump($fp);
// if(!$fp){
// die("Unable to open thi file.......");
// }

// $content = fread($fp,filesize("textfile.txt"));// peramiter>>>>>1. variable........... 2.length//writen content
// fclose($fp);//file close
// echo "$content";


//Using fgets() 

// $fp =fopen("textfile.txt","r");
// echo fgets($fp);//ye ek baar me sirf ek hi line print karta hain line by line
// echo fgets($fp);
// echo fgets($fp);
// echo fgets($fp);
// echo var_dump(fgets($fp));// for best method is using loop

//Reading a flie line by line
/*while($a=fgets($fp)){
    echo $a;
}
echo "<br>End of the file has been reached";
*/

//Reading a file character by character
/*
echo fgetc($fp);//read only one character
while($a=fgetc($fp)){
        echo $a;
    // break;
    }
    echo "<br>End of the file has been reached";
*/

//Write a program which reads the content of a file until " . " has been encountered
/*while($a=fgetc($fp)){
    echo $a;
if($a == "."){
    break;
}
}
fclose($fp)
echo "<br>End of the file has been reached";*/

//Writing a file in php
/*
//ise baar baar refresh karne par ek line reapet nhi hoti hain
$fp= fopen("textfile1.php","w");// is mode me puri file overwrite ho jati hain jisse aapka pichla jo bhi data ho use aap kho skte ho
fwrite($fp, "This is me and here i'm....\n");
fwrite($fp, "This is book\n");
fwrite($fp, "This is pen\n");
fwrite($fp, "This is me and and i am ram\n");
fclose($fp);
*/

//Appending to a file in php
/* 
//ise baar baar refresh karne par yah baar baar ame line print karega
$fp= fopen("textfile1.php","a");
fwrite($fp, "This is a appanding file.\n");
fclose($fp);
*/


?>