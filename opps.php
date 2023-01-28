<?php

echo "About Opps";

class Player{
//Properties
    public $name;
    public $speed = 5;
    public $running = false;
//Methods

function set_name($name){
    $this->name = $name;
}

function get_name(){
  return $this->name;
}

function running(){
    $this->running = true;
}
function stopRunning(){
    $this->stopRunning = false;
}

}

//objects
$player1 = new player();
$player1->set_name("<br>sonu");
echo $player1->get_name();
echo $player1->speed;

$player2 = new player();
$player2->set_name("<br>monu");
echo $player2->get_name();


$player3 = new player();
$player3->set_name("<br>tinu");
echo $player3->get_name();

$player4 = new player();
$player4->set_name("<br>sinu");
echo $player4->get_name();

?>