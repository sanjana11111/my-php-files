<?php
//update


//Database connection 
$servername ="localhost";
$username="root";
$password="";
$database="color";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we are not connected". mysqli_connect_error());
   }else{
     echo "Connection was successful <br>";
   }

   $sql="SELECT * FROM `fruit color`";

      $result = mysqli_query($conn,$sql);

      //find the numer of recards return
      $num = mysqli_num_rows($result);
      echo $num."this two record found in data base. <br> ";




 

?>