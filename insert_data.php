<?php

$servername = "localhost";
$username = "root";
$password ="";
$database = "color";

$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("Sorry we are not connected". mysqli_connect_error());
 }else{
     echo "Connection was successful <br>";

 }


$sql="INSERT INTO `trip` (`name`, `age`, `trip`) VALUES ('mina', '24', 'mumbai')";

 $result = mysqli_query($conn, $sql);
 
 if($result){
     echo " This data inserted successfully";
 }else{
    echo "This data inserted successfuly--------->".mysqli_error($conn);
 }


?>