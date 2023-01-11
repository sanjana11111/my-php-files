<?php

echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand"  style="font-size:30px;" href="forum_first.php">E-Coding</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item" style="font-size:20px;">
        <a class="nav-link active" aria-current="page" href="forum_first.php">Home</a>
      </li>
      <li class="nav-item " style="font-size:20px;">
        <a class="nav-link " href="forum_about.php">About</a>
      </li>';
      ?>
      <li class="nav-item dropdown" style="font-size:20px;">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        Categories
      </a>
      <ul class="dropdown-menu">

        <li><a class="dropdown-item" href="#">Fitness</a></li>
        <li><a class="dropdown-item" href="#">Food</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Diet-Plan</a></li>
      </ul>
    </li>

<?php
echo '
      <li class="nav-item" style="font-size:20px;">
        <a class="nav-link " href="forum_contact.php" tabindex="-3" >Contact</a>
      </li>
    </ul>
  
    <form class="d-flex" style="font-size:20px;">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    <div class="mx-2" style="font-size:20px;">
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    </div>
  </div>
</div>
</nav>';

include 'forum_loginm.php';
include 'forum_signupm.php';

?>