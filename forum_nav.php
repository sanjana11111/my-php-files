<?php include 'forum_dbconnect.php';?>
<?php

  session_start();
 
echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand"  style="font-size:25px;" href="forum_first.php">E-Coding</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item" style="font-size:18px;">
        <a class="nav-link active" aria-current="page" href="forum_first.php">Home</a>
      </li>
      <li class="nav-item " style="font-size:18px;">
        <a class="nav-link " href="forum_about.php">About</a>
      </li>
      
<li class="nav-item dropdown" style="font-size:18px;">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        Categories
    </a>
    <ul class="dropdown-menu">';
  
    $sql = "SELECT category_name, category_id FROM `categories` LIMIT 6";
    $result= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
          echo'<li><a class="dropdown-item" href="forum_thread_list.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
       }
        echo '
    </ul>
</li>
     <li class="nav-item" style="font-size:18px;">
        <a class="nav-link " href="forum_contact.php" tabindex="-3" >Contact</a>
      </li>
    </ul>';
   

if(isset( $_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {
    echo'<form class="d-flex" style="font-size:14px;" method="get" action="forum_search.php">
    <input class="form-control me-3" name="qurey" type="search" style="width:35%" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary mt-1" type="submit">Search</button>
    <p class="text-light mx-3"   style="position:relative; top:13px;">Welcome:'. $_SESSION['useremail'].'
    
     </p>
    <a class="btn btn-outline-primary" href="forum_logout.php ">
    Log out</a>
  </form>';
  }
  else{
    echo'
    <form class="d-flex" style="font-size:18px;">
      <input class="form-control me-2" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    <div class="mx-2" style="font-size:18px;">
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>';
  }

  
    echo'
    </div>
  </div>
</div>
</nav>';


include 'forum_loginm.php';
include 'forum_signupm.php';

if (isset ($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true" ){

 
    echo '<div class=" my-0 alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</s trong> Your can now login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

  

?>

<!-- alter table thread add FULLTEXT (`thread_title`,`thread_desc`); -->