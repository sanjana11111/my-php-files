<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Required form </title>
    <style>
       span{
            color:red;
        }
        </style>
    
</head>
<body>

<?php

//declre the variable to set the empty values
$fname=$email="";
$fname_Err=$email_Err="";

if($_SERVER["REQUEST_METHOD"]=="GET"){

if(empty($_GET["fname"])){
    $fname_Err = "required Name";
}else{
     $fname=text($_GET["fname"]);
}

if(empty($_GET["email"])){
    $email_Err = "required E-mail";
}else{
     $email=text($_GET["email"]);
}

}
function text($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" methode="get">

    <h1>Requred from</h1>
    <span>*Required</span><br><br>
     Name:<input type="text" name="fname"><span>*<?php echo $fname_Err;  ?></span><br><br>
     E-mail:<input type="email" name="email"><span>*<?php echo $email_Err;  ?></span><br>
     <br><br>
     <input type="submit" name="save" value="submit">
</form>

<?php

echo "<h2>Output</h2>";
echo $fname ."<br>";
echo $email;

?>
    
</body>
</html>