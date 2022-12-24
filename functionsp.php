<?php

function Mrks($arrMarks){
    $sum = 0;
    foreach ($arrMarks as $value){
    $sum += $value; //add the all values to ti given that an array's
    $persentage = $sum/6;//and the aray value divided by 6 cause we wanted to persantage and the marks in out of 600  

    }
    return $persentage;
}

$sanjana = [44, 55, 66, 77 ,88, 99];
$sumMarks = Mrks($sanjana);

$anita = [94, 75, 66, 87 ,84, 99];
$sumMarks1 = Mrks($anita);

echo "this is the sanjana's marks in out of 600 is $sumMarks<br>";

echo "this is the anita's marks in out of 600 is $sumMarks1<br>";
?>