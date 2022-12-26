<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name age file</title>

        <!-- Bootstrape link   -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrape script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
       
        <div class="card" style="width:40%; margin-left:250px;">
            <div class="card-header" style="background:#697180; color:white; text-align:center;"><h3>INFORMATION FORM</h3></div>

            <div class="card-body">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        NAME:<input type="text" class="form-control" name="fname" placeholder="Enter your name"><br>

         ADDRESS:<input type="text" class="form-control" name="add"><br>

        GENDER:
        <input type="radio" name="gender" value="MALE">MALE
        <input type="radio" name="gender" value="FEMALE">FEMALE
        <input type="radio" name="gender" value="OTHER">OTHER<br><br>

        <input type="submit" class="form-control" name="save"><br>

</form>
<div class="table"  style="width:100%; border: 1px solid gray">
    <tr>
    <td>
<?php
if(isset($_GET['save'])){

    echo $_REQUEST['fname']."<br>";
    echo $_REQUEST['gender']."<br>";
    echo $_REQUEST['add']."<br>";
}
?>
 

 </td>

</tr>
</div>
</div>
</div>

</div>
</body>
</html>