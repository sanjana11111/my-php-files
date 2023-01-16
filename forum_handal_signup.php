<?php
$showError="false";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'forum_dbconnect.php';

$user_email= $_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

//check weather email exixst

$existSql="SELECT * FROM `forum_users` WHERE user_email= '$user_email';";
$result = mysqli_query($conn,$existSql);
$numRows = mysqli_num_rows($result);

if($numRows>0){
    $showError = "Email alredy in use";
        }
        else{
            if($pass == $cpass){

                        $hash= password_hash($pass,PASSWORD_DEFAULT);
                        $sql= "INSERT INTO `forum_users` (`user_email`, `user_pass``user_timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
                        $result = mysqli_query($conn,$sql);
echo $result;
                    if($result){
                        $showAlert=true;
                        //redirect
                        header("location: forum_first.php?signupsuccess=true");
                    }
                }
                else{
                  $showError ="Passwords do not match";
                
                }
        }

header("location: forum_first.php?signupsuccess=false&error=$showError");


}

?>