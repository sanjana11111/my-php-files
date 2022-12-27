<?php

// MySQLi extension
//connect to database
$servername="localhost";
$username="root";
$password="";

//creat a connection
$conn = mysqli_connect($servername,$username,$password);

if(!$conn){

    die("sorry we are not connected:" . mysqli_connect_error());

}else{

echo "this is successfily connected";
}
?>