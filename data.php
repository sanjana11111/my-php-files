<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data enter</title>
    <style>
        .tarea{
            height:150px;
            width:250px;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<br><br><br>
<input type="submit" name="submit" value="submit" >
</form>
<br><br>

<textarea class="tarea"> 

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    //Collect valueof input field

    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty ($name)){
        
    }else{
        echo $name;
    }
}

?>
</textarea>

    
</body>
</html>