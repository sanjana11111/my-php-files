<?php
$showError= false;
if ($_SERVER['REQUEST_METHOD']=='POST'){

    include 'forum_dbconnect.php';

    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql= "SELECT * FROM `forum_users` WHERE `user_email` = '$email'";
    $result= mysqli_query($conn,$sql);
   
$numRows = mysqli_num_rows($result);
// echo $numRows."<br>";

if($numRows == 1){

                        $row = mysqli_fetch_assoc($result);

                        // echo $pass."<br>";

                 
                if(password_verify($pass , $row['user_pass']))
                {
                            
                            session_start();

                            $_SESSION['loggedin'] = true;

                            $_SESSION['useremail'] = $email;

                        // echo "logged in" . $email ;
                    header("Location: forum_first.php");
                    
                        }else{
                            echo "unable to login for this error";
                        }
         }echo "unable to login";
}



?>