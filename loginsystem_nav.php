<?php

if(isset( $_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  $loggedin=true;
}else{
  $loggedin=false;
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation bar</title>
    <style>
     nav{
            font-size: 20px;
        }
        img{
            
            height:70px;
        }
        .nav-item{
            padding:0 22px;
        }
    </style>
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src= "nav_file.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="loginsystem_welcome.php">Home</a>
        </li>';
       if(!$loggedin){
        echo'<li class="nav-item">
          <a class="nav-link active" href="loginsystem_login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="loginsystem_signup.php">Sign up</a>
        </li>';
       }
       if($loggedin){
        echo'<li class="nav-item">
          <a class="nav-link active" href="loginsystem_logout.php">Log out</a>
        </li>';
       }
       
     echo '</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>';
?>