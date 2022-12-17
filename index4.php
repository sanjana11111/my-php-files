<?php
//indexing array [0,1 ,2,3,..........]
$ary1 = array("tool1","tool2","tool3");
//add one more
$ary1[] = "tool4";

echo"<pre>";
print_r($ary1);
echo"</pre>";

//assosiative array & multidimensional arry [key => value]

$ary2=array(
'name' => 'sanjana goldar',
'age' => 20,
'contact' => array('9876543210',
                    'second'=>'086390695',
                    '45289572409',
                    'registration' =>[
                                      '00000000',
                                      '111111',
                                      '5555555',


                    ],
                   ),

  'class' => 12,
  'addmition' => true,                 
);
//add one more
$ary2["address"] = ['districe'=> 'betul',
                       'teh.'=> 'amla',];

echo"<pre>";
print_r($ary2);
echo"</pre>";

?>