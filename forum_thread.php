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
   
 

   while($row = mysqli_fetch_assoc($result)){
     
    $title = $row ['thread_title'];
    $desc = $row ['thread_desc'];  
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
        <h1>Discussions</h1>
        <?php

    /*    $id=$_GET['threadid'];

     $sql="SELECT * FROM `thread` WHERE thread_id =$id";

    $result=mysqli_query($conn ,$sql);
   
   while($row = mysqli_fetch_assoc($result)){
     
 
    $title = $row ['thread_title'];
    $desc = $row ['thread_desc'];  

            echo'  <div class="container">
            <div class="media my-4">
            <img src="indexpic.jpg" width="55px" class="align-self-start mr-3" alt="..." style="position:reletive;">
            <span class="media-body" style="position:absolute; margin-right: 232px;">
                <h5 class="mt-0"><a href="forum_thread.php" class="text-dark" style="text-decoration:none;">'.$title.'</a></h5>
                '.$desc.'

                </span>
            </div>
            </div>';

   }  */
?>
    </div>







    <?php include 'forum_footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->



</body>

</html>