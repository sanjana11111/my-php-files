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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Coding forums</title>
</head>

<body>
    <?php include 'forum_dbconnect.php';?>
    <?php include 'forum_nav.php';?>


    <!-- Search results -->


    <div class="container my-3" style="height:85vh;">



        <h2>Search result for <em>"<?php echo $_GET['qurey'] ?>"</em></h2>
       
            
        <?php
                  $noResult=true;
                    $qurey=$_GET['qurey'];
                    $sql="select * from thread where match (thread_title, thread_desc) against ('$qurey')";
                    $result=mysqli_query($conn,$sql);

                    while($row=mysqli_fetch_assoc($result)){
                    $title=$row['thread_title'];
                    $desc=$row['thread_desc'];
                    $thread_id=$row['thread_id'];
                    $noResult=false;
                    $url = "forum_thread.php?threadid=".$thread_id;
               

                    echo'<div class="result py-2">  
                    <h4> <a href="'.$url.'" class="text-dark" style="text-decoration:none;" >'.$title.'</a></h4>
                    <p>'.$desc.'</p>
                    </div>';
                    }
                    
      if($noResult==true){
       echo' <div class="mt-4 p-5 text-secondary rounded" style="background-color:#e1f0f7;">
              <h1 class="display-5">No Threads Found</h1> 
              <h4 style="font-weight:100;">Suggestions:
              <ul>
                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</h4></li>
              </ul>
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