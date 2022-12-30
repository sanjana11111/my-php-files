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

   $sql="SELECT * FROM `trip` WHERE `trip` = 'kashmir';";

      $result = mysqli_query($conn,$sql);

      //find the numer of recards return
      $num = mysqli_num_rows($result);
      echo $num."this two record found in data base. <br> ";

  if ($num>0){
      while($row= mysqli_fetch_assoc($result)){
       
       
        echo $row['s.no'] . ". Hello " . $row['name']." this is your age ". $row['age'] ." and your trip is ". $row['trip'].".<br>";

    }

  }

?>