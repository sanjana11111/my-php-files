<?php

require 'opps-namespace1.php';
require 'opps-namespace2.php';

function wow(){
    echo "This is wow from product page number 3 <br>";
 }

$obj = new first\page();


// wow(); >>>>>>>>>>>// ye page 3 me diye wow ke function ko print karega

// first\wow();>>>>>>>>>>>>>>>>// ye page number 1 ke wow function ko print karega kyunki usme name space ka use kiya hain or page number 3 me  page 1 ki file "require" ki hain.

/*
*NOTE-

1.hume namespace ke naam bde jese cdf/fj/vjfv/fszfb bhi rakh skte hain pr agr hume bhot se object bane ho to hume ise baar baarlikhna padega iska solution:
 use cdf/fj/vjfv/fszfb as cdm; //hum iska name kuch bhi rakh skte hain.

2.please do sure ki whitespace na ho.
*/
?>