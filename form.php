<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrape link   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrape script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    

    <?php
// $servername = "localhost";
// $username = "root";
// $password ="";
// $database="sonu";


// $conn = mysqli_connect($servername,$username,$password,$database);

// // mysqli_qurey($conn,$sql);
// if(!$conn){
//    die("Sorry we are not connected". mysqli_connect_error());
// }else{
//     echo "Connection was successful <br>";
// }

// create a database

// $sql = "CREATE DATABASE sonu";
// $result = mysqli_query($conn, $sql);
 
// if($result){
//     echo " This database created successfully";
// }else{
//     echo "This database was not created successfuly--------->".mysqli_error($conn);
// }

//create a table in database

// $sql = "CREATE TABLE `sonu`.`friend details` (`S.no` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `email` VARCHAR(25) NOT NULL , `desc` TEXT(20) NOT NULL , PRIMARY KEY (`S.no`)) ";

// $result = mysqli_query($conn, $sql);
 
//  if($result){
//      echo " This database table created successfully";
//  }else{
//     echo "This database table was not created successfuly--------->".mysqli_error($conn);
//  }

//insert data in database

// $sql="INSERT INTO `deatils` (`name`, `age`, `gender`) VALUES ('$name', '$age', '$gender')";

// $result = mysqli_query($conn, $sql);

// if($result){
//     echo " This data inserted successfully";
// }else{
//    echo "This data inserted successfuly--------->".mysqli_error($conn);
// }

    ?>
<?php
     error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $desc= $_POST['desc'];
   
  }
      ?>
      <?php
      $servername = "localhost";
      $username = "root";
      $password ="";
      $database="sonu";
      
      
      $conn = mysqli_connect($servername,$username,$password,$database);
      
      // mysqli_qurey($conn,$sql);
    //   if(!$conn){
    //      die("Sorry we are not connected". mysqli_connect_error());
    //   }else{
    //       echo "Connection was successful <br>";
    //   }

      $sql="INSERT INTO `friend details` (`name`, `email`, `desc`) VALUES ('$name', '$email', '$desc')";

      $result = mysqli_query($conn, $sql);
      
      if($result){

                
            echo '<div class="alert alert-success" role="alert">
           <h4>"Your form has been Submited <strong>Successfully</strong>!"</h4>
             </div>';
            }else{
            echo '<div class="alert alert-danger" role="alert">
           <h4>"Your form has been <strong>NOT</strong>Submited!"</h4>
           </div>';
               }
      
      ?>

    <div class="container" style="width:30%;">

        <form action="/php prectice/form.php" method="POST">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="desc" >Description</label>
                <textarea class="form-control" name="desc" id="desc" cols="10" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>