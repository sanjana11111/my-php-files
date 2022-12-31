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

   $sql= "DELETE FROM `trip` WHERE `name`='mina' LIMIT 2";
   

      $result = mysqli_query($conn,$sql);

      echo var_dump($result); //check bool to check the update
      $aff = mysqli_affected_rows($conn);
      echo "<br> number of affected rows: $aff";

      if($result){

        echo "<br>Delete successfully.";
      }else{
           $err= mysqli_error($conn);
        echo "<br>Deleting is not successfully because of this error---> $err";
      }
      ?>