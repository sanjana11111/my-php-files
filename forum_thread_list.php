<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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


    <section class="py-1 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="display-4">Welcome to <?php echo $cat_name ?> forums</h1>
                <p style="font-size:24px; font-weight: 100;"><?php echo $cat_desc ?></p>

                <a href="#" class="btn btn-primary btn-lg my-2" role="button">Learn more</a>


            </div>
        </div>
    </section>

    <div class="container" style="min-height:415px; padding:0 190px;">
        <h1>Start a Discussion?</h1>

        <div class="container">
            <form>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label"><h4 class="text-secondary">Problem Title</h4></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"><P class="text-secondary">Keep your title title as short and crisp as possible</P></div>
                </div>
                
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label"><h4 class="text-secondary">Ellaborate Your Concern</h4></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <center><button type="submit" class="btn btn-primary btn-lg my-3">Submit Your Forum</button></center>
            </form>
        </div>

        <h1>Browse Question</h1>
        <?php

        $id=$_GET['catid'];

      $sql="SELECT * FROM `thread` WHERE thread_cat_id =$id;";

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
                <h5 class="mt-0"><a href="forum_thread.php?threadid='.$id.'" class="text-dark" style="text-decoration:none;">'.$title.'</a></h5>
                '.$desc.'

                </span>
            </div>
            </div>';

                }
                if($noResult){

                    echo'
                <div class="mt-4 p-5 text-secondary rounded" style="background-color:#f2f2f2;">
                    <h1 class="display-5">No Results Found</h1> 
                    <h4 style="font-weight:100;">BE the first persone to ask a question..........?</h4> 
                </div>';
                }
                ?>
    </div>







    <?php include 'forum_footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha383-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


</body>

</html>