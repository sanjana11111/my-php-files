<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using bootstrap in form</title>

    <!-- Bootstrape link   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrape script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        img {
            position: absolute;
            width: 149px;
            height: 140px;
            left: 596px;
            top: 82px;

        }

        span {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <br><br>


        <div class="card" style="width: 55%; margin-left: 298px;">
            <div class="card-header" style="background-color:#c9617e; color:#fff;">
                <h3 align="center"><B>INFORMATION ABOUT USER</B></h3>
            </div>

            <div class="card-body">


                <img src="blank.png" alt="photo">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="GET">
                    <div class="table-responsive ">
                        <table class="table table-borderless" style="width:60%; margin-left:20px;">
                            <div class="row">
                                <tr>
                                    <th style="width:10%">
                                        <lable class="col-from-lable"> <span>Student Name:</span></lable>
                                    </th>
                                    <td style="width:29%"> <input type="text" class="form-control capitalize_class" name="sname"
                                            placeholder="Enter name" required
                                            aria-required="true"></span></td>
                                </tr>
                                <tr>
                                    <th style="width:10%"><span>Father's Name:</span></th>
                                    <td style="width:29%"><span class="col">
                                        <input type="text" name="fname" class="form-control capitalize_class" required
                                                aria-required="true" placeholder="Enter name"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:10%"><span>Mother's Name:</span></th>
                                    <td style="width:29%"><span class="col"><input type="text" name="mname"
                                                class="form-control capitalize_class" required
                                                aria-required="true" placeholder="Enter name"></span>
                                    </td>
                                </tr>
                            </div>
                        </table>


                        <table class="table table-borderless" style="width:72%; margin-left:20px; margin-top:-16px;">
                            <div class="row">
                                <tr>
                                    <th style="width:10%">
                                        <lable class="col-from-lable"> <span>User email:</span></lable>
                                    </th>
                                    <td style="width:30.5%">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Your Email" required
                                            aria-required="true"
                                                name="email">
                                            <span class="input-group-text">@gmail.com</span>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        </table>
                    </div>
                    <table class="table table-borderless" style="width:72%; margin-left:20px; margin-top:-16px;">
                        <div class="row">
                            <tr>
                                <th>
                                    <div class="checkbox" class="col-4" required
                                    aria-required="true"> Games :-
                                 </th>
                                 <td><label><input type="checkbox" name="games[]" value="Hockey" class="col-2"> Hockey</label></td>
                                 <td><label><input type="checkbox" name="games[]" value="Vollyball" class="col-2"> Vollyball</label></td>
                                 <td><label><input type="checkbox" name="games[]" value="Cricket" class="col-2"> Cricket</label></td>
                                 <td><label><input type="checkbox" name="games[]" value="Football" class="col-2"> Football</label></td>
                            </tr>
                        </div>
                        
                    </table>
            </div><br>

            <table class="table table-borderless" style="width:72%; margin-left:20px; margin-top:-16px;">
                <div class="row">
                    <tr>
                        <th class="col-3">Course name :</th>
                        <td class="col-9">
                            <div class="course" style="width:50%;">

                                <select class="form-control" name="course" required
                                    aria-required="true">
                                    <option value=""> Select </option>
                                    <option value="B.sc">B.sc</option>
                                    <option value="B.ed">B.ed</option>
                                    <option value="BCA">BCA</option>
                                </select>
                            </div>
                    </tr>
                </div>
            </table>

            <div class="row">
                <div class="end" align="center">
                    <button type="submit" name="save" class="btn btn-dark">Submit</button>
                </div>

            </div>
            <br><br>
        </div>

    </div>

    </form>
    
</div>

</div>

</div>

<br><br>

<!-- starting table -->
<div class="container">
<table class="table table-responsive table-borderd bg-light" style="width:100%;">

<tr>

    <th>student name</th>
    <th> father name</th>
    <th>mother name</th>
    <th>gmail</th>
    <th>course</th>
     <th>games</th>

</tr>
<tr>
  <?php $_SERVER; ?>
    <td>
    <?php echo $_GET['sname']; ?>
    
   </td>
    <td> <?php echo $_GET['fname']; ?></td>
    <td> <?php echo $_GET['mname']; ?></td>
    <td> <?php echo $_GET['email']; ?></td>
    <td> <?php echo $_GET['course']; ?></td>
    <td> <?php  $playing_games = $_GET['games']; 
                $insert = implode(",",$playing_games);
                 echo $insert;?> </td>
 
</tr>

</table>
</div>
<?php 
$sname=$fname=$mname=$email=$course=$games="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = test_input($_GET["sname"]);
    $name = test_input($_GET["fname"]);
    $name = test_input($_GET["mname"]);
    $email = test_input($_GET["email"]);
    $website = test_input($_GET["course"]);
    $comment = test_input($_GET["games"]);
   
  }
  
  function test_input($data) {
   
    $data = htmlspecialchars($data);
    return $data;
  }

?>
</body>

</html>