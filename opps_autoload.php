<?php
// require 'autoload_file/autoload1.php';

function __autoload($class){
    require "autoload_file/" .$class.".php";
}

$obj = new first();
// $obj1 = new second();

?>