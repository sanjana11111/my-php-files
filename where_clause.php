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

   $sql= "SELECT * FROM `trip` WHERE `name` = 'neha'";
   

      $result = mysqli_query($conn,$sql);

      //find the numer of recards return
      $num = mysqli_num_rows($result);
      echo $num."this two record found in data base. <br> ";

      //it prints the given s.no in the datbase

  // if ($num>0){

  //     while($row = mysqli_fetch_assoc($result)){
       
  //       echo $row['s.no'] . ". Hello " . $row['name']." this is your age ". $row['age'] ." and your trip is ". $row['trip'].".<br>";

  //   }
  // }

//Fetch the data in database
    //it prints consecutive s.no. 
    $no=1;

  if ($num>0){

      while($row = mysqli_fetch_assoc($result)){
       
        echo $no . ". Hello " . $row['name']." this is your age ". $row['age'] ." and your trip is ". $row['trip'].".<br>";

        $no = $no+1;

    }
  }

  //update data in database

  $sql="UPDATE `trip` SET `name` = 'shital' WHERE `trip`.`s.no` = 5";

  $result = mysqli_query($conn,$sql);
     echo var_dump($result); //check bool to check the update
     $aff = mysqli_affected_rows($conn);
     echo "<br> number of affected rows: $aff";
  if($result){

    echo "We updated the record Successfully";
  }else{
    echo "We could not update the record Successfully";
  }
?>