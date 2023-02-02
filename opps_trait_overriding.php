<!-- <?php

///OOPS Traits Method overriding  
/*
trait some {
        public function sunday(){
        
            echo "Hye this is sunday....";
        }   
    }
    
    class week{
    
       
         function sunday(){
    
            echo "<br>I love sunday's....";
        }
    
    }
    class weekend extends week{  //3rd praority extends ko milegi
    
        use some;//2nd praority trait ko milegi
    
        function sunday(){
    
            echo "<br>Sunday makes me happy.....";//1st praority 
        }
    
    }
    
    $obj = new weekend();
    $obj->sunday();
*/   
?> -->

<?php
//Using two trait and his use.
/*
 trait some {
    public function sunday(){
             
    echo "<br>Hye this is sunday....";
  }   
}
trait think {
 public function sunday(){
          
 echo "<br>Is this sunday....?";
}   
}
class prep{
// We are not using 2 trait's method cause method name was same 
use some,think{

some::sunday insteadof think; //We are running only some trait        
think::sunday as endday; //if we need both then... rename the other one

}

}

   
$obj = new prep();
$obj->sunday();
$obj->endday();
*/
?>

<?php

//If trait method is private the we use this
trait some {
    private function sunday(){
             
    echo "<br>Hye this is sunday....";
  }  
}
  class prep{
   
    use some{

     //some::sunday as public ;         //we using both
     //some::sunday as public weekend;  //we using both
    some::sunday as public weekend;

    }
    
    }

$obj = new prep();
$obj->weekend();
?>