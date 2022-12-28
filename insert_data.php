<?php

$servername = "localhost";
$username = "root";
$password ="";
$database = "sonu";

$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("Sorry we are not connected". mysqli_connect_error());
 }else{
     echo "Connection was successful <br>";

 }

 $name="mushkan";
 $age=27;
 $gender="female";

 $sql="INSERT INTO `deatils` (`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";

 $result = mysqli_query($conn, $sql);
 
 if($result){
     echo " This data inserted successfully";
 }else{
    echo "This data inserted successfuly--------->".mysqli_error($conn);
 }


?>