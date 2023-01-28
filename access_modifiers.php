<?php


//Access modifier in php is 
//1.private-can be accessed from anywhere
//2.public-can only be accessed  from within the class
//3.protected-can be accessed within the class and from derived class.


//By default the property and methods are treated as public
//Private propeprties and methods can only be accessed by other member functions of the class.

class movies{

private $name="Aavtar";

function showName(){

    echo"$this->name";
}


}

 $marvel= new movies();
//  echo $marvel->name;---------this will not work if $name="Avatar is private.

 $marvel->showName();

?>



