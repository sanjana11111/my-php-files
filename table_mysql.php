<?php

echo "Create a table in datatbase with using php <br>";

$servername = "localhost";
$username = "root";
$password ="";
$database = "sonu";

$conn = mysqli_connect($servername,$username,$password,$database);

// mysqli_qurey($conn,$sql);
if(!$conn){
   die("Sorry we are not connected". mysqli_connect_error());
}else{
    echo "Connection was successful <br>";
}

//create a database

// $sql = "CREATE DATABASE sonu";
// $result = mysqli_query($conn, $sql);
 
// if($result){
//     echo " This database created successfully";
// }else{
//     echo "This database was not created successfuly--------->".mysqli_error($conn);
// }

//create a table in database

$sql = "CREATE TABLE `sonu`.`friend list` (`S.no` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , PRIMARY KEY (`S.no`)) ";

$result = mysqli_query($conn, $sql);
 
 if($result){
     echo " This database table created successfully";
 }else{
    echo "This database table was not created successfuly--------->".mysqli_error($conn);
 }
?>