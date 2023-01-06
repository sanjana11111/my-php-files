<?php
$showAlert=false;
$showError=false;

if($_SERVER['REQUEST_METHOD']=="POST"){

include 'loginsystem_dbconnection.php';

$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

$existSql="SELECT * FROM `user` WHERE username='$username'";
$result=mysqli_query($conn,$existSql);
$numExistRows= mysqli_num_rows($result);

if($numExistRows>0){
    $showError="Username Alredy Exiest.";
}else{

       if(($password == $cpassword)){

          $sql="INSERT INTO `user`(`username`, `password`, `date`) VALUES ('$username','$password',current_timestamp())";

          $result = mysqli_query($conn,$sql);
         if($result){
                 $showAlert=true;
           }
    } elseif($password != $cpassword){
    $showError=" Password do not match";
       }
     
}
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign up</title>
    <style>
        label {
            font-size: 20px;
        }

        form {
            margin-left: 29%;
        }
        
    </style>

</head>

<body>
    <?php require 'loginsystem_nav.php' ?>
    <?php
   if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created and you can Login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
   }
   if($showError){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Opps!</strong>'.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
   }
?>
    <div class="container my-4">

        <h1 class="text-center">Signup to our website.</h1>

        <form class="my-5" action="loginsystem_signup.php" method="post">
            <div class="mb-3 col-md-7">
                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username">

            </div>
            <div class="mb-3  col-md-7">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3  col-md-7">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same Password</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required>
                <label class="form-check-label" for="checkbox">Check me out</label>
            </div>
            <button type="submit" class="btn btn-warning  col-md-7">Sign Up</button>
        </form>
    </div> <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>