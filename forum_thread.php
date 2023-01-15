<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>E-Coding forums</title>
</head>

<body>
    <?php include 'forum_nav.php';?>
    <?php include 'forum_dbconnect.php';?>
    <?php
           
           $id=$_GET['threadid'];
           $sql="SELECT * FROM `thread` WHERE thread_id = '$id';";
      
           $result=mysqli_query($conn ,$sql);
         
           $noResult=false;
      
              while($row = mysqli_fetch_assoc($result)){
      
                  $noResult=true; 
                  $title = $row ['thread_title'];
                  $desc = $row ['thread_desc'];  
              }
            
      ?>


          

    <?php 
   $showAlert=false;
   $method= $_SERVER['REQUEST_METHOD'];
   if($method=='POST'){
    //INSERT INTO d_comment DATABASE
    $d_comment=$_POST['comment'];
    
    $sql="INSERT INTO `d_comments`(`d_comment_contant`, `d_thread_id`, `d_comment_by`, `d_comment_time`) VALUES ('$d_comment','$id','0',current_timestamp())";
    $result=mysqli_query($conn ,$sql);
    $showAlert=true;

   }
  
  ?>

<?php
 
 if($showAlert){
    echo'<div class="alert alert-info alert-dismissible fade show" role="alert">
    <h4 style="font-weight:100;"><strong>Done!</strong>Your comment is added!!!</h4>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }

   ?>

    <section class="py-1 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="display-5"><?php echo $title; ?></h2>
                <p style="font-size:24px; font-weight:100;"><?php echo $desc; ?></p>

                <button type="button" class="btn btn-outline-primary btn-lg " data-bs-toggle="collapse"
                    data-bs-target="#posted_name">
                    Posted By
                </button>
                <div id="posted_name" class="collapse" style="font-size:20px;">Name who's posted..</div>

            </div>
    </section>

    <div class="container" style="min-height:525px;">
        <h1>Post a Comment</h1>

        <div class="container">

            <form action=<?php echo $_SERVER['REQUEST_URI'] ?> method="POST">

                <div class="mb-2">
                    <label for="comment" class="form-label">
                        <h4 class="text-secondary">Type of Comment</h4>
                    </label>
                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
                <center><button type="submit" class="btn btn-primary btn-lg my-3">Post Comment</button>
                </center>
            </form>
        </div>
        <div class="container" style="min-height:525px;">
            <h1>Discussions</h1>
     <?php

                $id=$_GET['threadid'];
                $sql="SELECT * FROM `d_comments` WHERE `d_thread_id`=$id";
                $result= mysqli_query($conn,$sql);
                $noResult = true;

                while($row = mysqli_fetch_assoc($result)){

                    $noResult = false;
                    $id = $row['d_comment_id'];
                    $content = $row['d_comment_contant'];

              
 
            echo'  <div class="container">
            <div class="media my-4">
            <img src="forum_pic.jpg" width="55px" class="align-self-start mr-3" alt="..." style="position:reletive;">
            <span class="media-body" style="position:absolute; margin-right: 232px;">
                <h4 class="mt-2" style="font-weight:400;">'.$content.'</h4>
                </span>
            </div>
            </div>';
        }
           
          //   echo var_dump($noResult);
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
    <?php include 'forum_footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
</body>

</html>