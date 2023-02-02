<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
    .container {
        width: 50%;
        margin-top: 15px;
    }

    .card-body,
    .output,
    option {
        font-family: system-ui;
        font-size: 19px;
    }

    .error {
        color: red;
    }
    </style>

</head>

<body>
    <?php
         error_reporting(0);
    
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = $_POST["name"];
            }
                     
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";

            }else{
              $email = $_POST["email"];       
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email Please enter valid email";
              }
            }     

            if (empty($_POST["course"])) {
                $courseErr = "Course is required";
              } else {
                $course = $_POST["course"];
              }
          
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = $_POST["gender"];
            }
            
            if (empty($_POST["comment"])) {
                $commentErr = "Comment is required";
              } else {
                $comment = $_POST["comment"];
              }

              if (!empty($_POST["hobby"])) {
                $check_value = $_POST["hobby"];
                $check = implode(",",$check_value);
                
              } else {
               
                $checkErr = "Hobby is required";
              }

        }
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>User Information</h1>
            </div>
            <div class="card-body">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <!-- Name -->
                    <div class="mb-1">
                        <label for="name" class="form-label">User Name</label><span
                            class="error">*<?php echo $nameErr;?> </span>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="">
                    </div>
                    <!-- Email -->
                    <div class="mb-1">
                        <label for="email" class="form-label">Email address</label><span
                            class="error">*<?php echo $emailErr;?> </span>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <!-- Gender -->
                    <div class="mb-1">
                        <label for="gender" class="form-label">Gender<span class="error">*</span> :
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                            <label class="form-check-label" for="inlineRadio3">Other</label>
                        </div>
                        <div class="err"> <span class="error"><?php echo $genderErr;?></span></div>
                    </div>
                    <!-- Select -->
                    <div class="mb-1">
                        <label for="course" class="form-label">Course</label><span
                            class="error">*<?php echo $courseErr;?> </span>

                        <select class="form-control" name="course" aria-required="true">
                            <option value=""> Select </option>
                            <option value="Maths">Maths</option>
                            <option value="Science">Science</option>
                            <option value="Hindi">Hindi</option>
                        </select>
                    </div>

                    <!-- Comment -->
                    <div for="comment">Any Comment<span class="error">*<?php echo $commentErr;?> </span></div>
                    <textarea class="form-control" name="comment" rows="5" cols="40"></textarea>

                    <!-- Check box -->

                    <div class="mb-1">
                        <label for="hobby" class="form-label">Hobby<span class="error">*</span> : </label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobby[]" value="Read"
                                id="inlineCheck1">
                            <label class="form-check-label" for="inlineCheck1">Read</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobby[]" value="Dance"
                                id="inlineCheck2">
                            <label class="form-check-label" for="inlineCheck2">Dance</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobby[]" value="Play Games"
                                id="inlineCheck3">
                            <label class="form-check-label" for="inlineCheck3">Play Games</label>
                        </div>
                        <div class="err"> <span class="error"><?php echo $checkErr;?></span></div>
                    </div>
                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
        </div>
        <div class="output">
            <?php
        
            echo "<h2>Result:</h2>";
            echo $name. "<br>" .$email."<br>". $course."<br>".  $gender."<br>". $check."<br>";
           
         ?>
        </div>
    </div>


    </div>

</body>

</html>