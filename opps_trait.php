<?php

trait hello{

    public function sayhello(){

        echo"Hello Dear \n";
    }
    public function something(){

        echo"How are you? \n";
    }
}
trait bye{

public function bye(){

    echo"Bye-Bye dear \n";
}

}

class base{

    use hello, bye;//We can use multiple trait in other classes //this is shortcut.
}
class dolly{

    use hello;//We can use multiple trait in other classes.
    use bye;
}

$obj = new base();//class 1
$obj->sayhello();
$obj->bye();

$test = new dolly();// class 2
$test->something();
$test->sayhello();
$test->bye();





?>