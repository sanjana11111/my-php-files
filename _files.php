<?php

//file ko read kese kiya jata hain  is function

// $file = readfile("textfile.txt"); //this function is also count the characters in number and print the numbers in the end of sentences.
// echo $file;


// readfile("textfile.txt"); //it's only print the given sentence.
// readfile("blank.png")
// readfile("about.php")

$fp =fopen("textfile.txt","r");//writen value resource or false
// echo var_dump($fp);
if(!$fp){
die("Unable to open thi file.......");
}

$content = fread($fp,filesize("textfile.txt"));// peramiter>>>>>1. variable........... 2.length//writen content
fclose($fp);//file close
echo "$content";



?>