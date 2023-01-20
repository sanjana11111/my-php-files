<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>E-Coding forums</title>
</head>

<body>
    <?php include 'forum_nav.php';?>
    <?php include 'forum_dbconnect.php';?>


    <?php
           
     $id=$_GET['catid'];
     $sql="SELECT * FROM `categories` WHERE category_id = '$id';";

    $result=mysqli_query($conn ,$sql);
   
 

   while($row = mysqli_fetch_assoc($result)){
     
    $cat_name = $row ['category_name'];
    $cat_desc = $row ['category_description'];  
   }
  ?>

    <?php 
   $showAlert=false;
   $method= $_SERVER['REQUEST_METHOD'];
 
   if($method=='POST'){
    //INSERT INTO thread  DATABASE
    $th_title=$_POST['th_title'];
    $th_comment=$_POST['th_comment'];

    $sql="INSERT INTO `thread`(`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title','$th_comment','$id','0', current_timestamp())";
    $result=mysqli_query($conn ,$sql);
    $showAlert=true;

   }
  
  ?>
    <?php
 
 if($showAlert){
    echo'<div class="alert alert-info alert-dismissible fade show" role="alert">
    <h4 style="font-weight:100;"><strong>Successfully!</strong>Your thread has been added! Please wait for community to respond</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }

   ?>
    <section class="py-1 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="display-4">Welcome to <?php echo $cat_name ?> forums</h1>
                <p style="font-size:24px; font-weight: 100;"><?php echo $cat_desc ?></p>

                <a href="#" class="btn btn-primary btn-lg my-2" role="button">Learn more</a>
            </div>
        </div>
    </section>

    <div class="container-fluid" style="min-height:415px; padding:0 190px;">
        <div id="accordion">
            <div class="card">

            <div class="card-header">
                    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">

                    
                        <h1>Start a Discussion?</h1>
                    </a>
                </div>
            <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            
            echo'
                
                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                    <div class="card-body">

                        <div class="container">

                            <form action='. $_SERVER['REQUEST_URI'].'method="POST">
                                <div class="mb-2">
                                    <label for="th_title" class="form-label">
                                        <h4 class="text-secondary">Problem Title</h4>
                                    </label>
                                    <input type="text" class="form-control" id="th_title" name="th_title"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                        <P class="text-secondary">Keep your title as short and crisp as possible
                                        </P>
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label for="th_comment" class="form-label">
                                        <h4 class="text-secondary">Ellaborate Your Concern</h4>
                                    </label>
                                    <textarea class="form-control" id="th_comment" name="th_comment" rows="3"></textarea>
                                </div>
                                <center><button type="submit" class="btn btn-primary btn-lg my-3">Submit Your
                                        Forum</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>';
            }
            else{
                echo'<div class="text-danger">IF YOU WAND TO START A DISSCUSSION THEN PLEASE LOG IN*</div>';
            }

                ?>
            </div>

        </div>
        <div id="accordion1">
            <div class="card">
                <div class="card-header">
                    <a class="btn" data-bs-toggle="collapse" href="#collapseTwo">
                        <h1>Browse Question</h1>
                        </a>
                </div>
                <div id="collapseTwo" class="collapse show" data-bs-parent="#accordion1">
                    <div class="card-body">

                        <?php

        $id=$_GET['catid'];

      $sql="SELECT * FROM `thread` WHERE thread_cat_id =$id";

     $result=mysqli_query($conn ,$sql);
     $noResult= true;

      while($row = mysqli_fetch_assoc($result)){
      $noResult= false;
      $id = $row ['thread_id'];
      $title = $row ['thread_title'];
       $desc = $row ['thread_desc'];  

            echo'  <div class="container">
            <div class="media my-4">
            <img src="forum_pic.jpg" width="55px" class="align-self-start mr-3" alt="..." style="position:reletive;">
            <span class="media-body" style="position:absolute; margin-right: 232px;">
                <h5 class="my-0"><a href="forum_thread.php?threadid='.$id.'" class="text-dark" style="text-decoration:none;">'.$title.'</a></h5>
                '.$desc.'

                </span>
            </div>
            </div>';

                }
                if($noResult){

                    echo'
                <div class="mt-4 p-5 text-secondary rounded" style="background-color:#e1f0f7;">
                    <h1 class="display-5">No Threads Found</h1> 
                    <h4 style="font-weight:100;">BE the first persone to ask a question..........?</h4> 
                </div>';
                }
                ?>
                </div>

                </div>
                </div>
            </div>
            </div>

               <?php include 'forum_footer.php';?>
                <!-- Optional JavaScript; choose one of the two! -->
                <!-- Option 1: Bootstrap Bundle with Popper -->

                <!-- Option 2: Separate Popper and Bootstrap JS -->


</body>

</html>