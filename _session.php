<?php
//What is session?
//used to manage information across difference pages

//Verify the user login info
session_start();
$_SESSION['username'] = "Sonu";
$_SESSION['favColor'] = "Black";

echo "We have saved this session" ;

?>