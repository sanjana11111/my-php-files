<?php

session_start();
if (isset($_SESSION['username'])){
echo " Welcome ".$_SESSION['username'];
echo " <br> Your fav. color is ".$_SESSION['favColor'];
}else{
    echo "Plese login to continue";
}


?>