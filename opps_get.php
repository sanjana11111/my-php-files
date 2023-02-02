<?php
/*
//How to print Error in Formal way....

class fruit{

   private $name="Banana";

    function __get($result){

        echo "You are traying to access Non Exciting or private property($result)";
    }

}

$obj = new fruit();
$obj->name;
*/
?>


<?php
/*
//__get method for array 
class arr{

    public $data=["name"=>"Sanjana","course"=>"PHP","pay"=>"3000"]; //if access modifire is private then use __get method is work for thown error in formal way...
 
     function __get($result){
 
         echo "You are traying to access Non Exciting or private property($result)";
     }
 
 }
 
 $obj = new arr();
 echo"<pre>";
 print_r($obj->data);
 echo"</pre>";
 */
?>

<?php
// Array me se ek perticular key ki value kese nikale
class arr{

    private $data = ["name"=>"Sanjana","course"=>"PHP","pay"=>"3000"]; //if access modifire is private then use __get method is work for thown error in formal way...
 
     function __get($key){
 
        if(array_key_exists($key, $this->data)){
          
             return $this->data[$key];

        }else{
            return "This ($key) is not defined";
        }
        
     }
 
 }
 
 $obj = new arr();
//  echo"<pre>";
//  print_r($obj->data);
//  echo"</pre>";

echo $obj->name; // agar hum isme us value ko define karna chahte h hain jo array me difine nhi ki gain hain to iske liye else function define hoga or uski value return hogi.

?>