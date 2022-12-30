
<?php

      //database connection
      $servername = "localhost";
      $username = "root";
      $password ="";
      $database="sonu1";
      
      
      $conn = mysqli_connect($servername,$username,$password,$database);


      if(!$conn){
         die("Sorry we are not connected". mysqli_connect_error());
      }else{
          echo "Connection was successful <br>";
      }

      $sql="SELECT * FROM `list`";

      $result = mysqli_query($conn,$sql);

      //find the numer of recards return
      $num= mysqli_num_rows($result);
      echo $num."this two record found in data base<br> ";

      //disply row return by the sql query

      // if($num>0){
      //   $row = mysqli_fetch_assoc($result);//mysqli_fetch_assoc() assosiative array run karta hain jo by one by ek next line ko return krta h.....
      //   echo"<pre>";
      //   echo var_dump($row);
      //   echo"</pre>";
      //   $row = mysqli_fetch_assoc($result);
      //   echo"<pre>";
      //   echo var_dump($row);
      //   echo"</pre>";
      //   $row = mysqli_fetch_assoc($result);
      //   echo"<pre>";
      //   echo var_dump($row);
      //   echo"</pre><br>";
      // }

      //disply row in a better way in while loop

      while($row= mysqli_fetch_assoc($result)){
       
          //  echo"<pre>";
          //  echo var_dump($row);
          //  echo"</pre>";

          echo $row['S.no'] . ". Hello " . $row['name']." this is your email ". $row['email'] ." and your description ". $row['desc'].".<br>";

      }
?>
