<?php

class Movies{

public $name = "Avatar";
private $income = 145060;

function setIncome($income){
    $this->income = $income;
}

 function getIncome(){
    echo"<br>The income of This movies $this->name is $this->income";
 }

function showMovie(){

   echo "<br> The name of the Movie is $this->name";
   }
 }

$movie1 = new Movies();
$movie1->name = "Iron Man";
$movie1->setIncome(100000);
$movie1->getIncome();
$movie1->showMovie();

$movie2 = new Movies();
$movie2->name = "Spider Man";

$movie2->setIncome(14000);
$movie2->getIncome();
$movie2->showMovie();


class Languages extends Movies{

    private $language = "Hindi";

    function changeLanguage($lang){

        $this->language = $lang;

    }
}

$subTitle = new Languages();
$subTitle->name ="Thor";
// $subTitle->setIncome(5000);
$subTitle->getIncome();
echo $subTitle->changeLanguage("English");
$subTitle->showMovie();
?>