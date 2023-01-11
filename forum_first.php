<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Coding forums</title>
</head>

<body>
    <?php include 'forum_nav.php';?>
    <?php include 'forum_dbconnect.php';?>

    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="c2.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>E-coding</h5>
                    <p>We helping you for incresing knowledge.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="c1.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>E-coding</h5>
                    <p>We finding you problems solution.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="c5.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>E-coding</h5>
                    <p>We are here and always with you.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container mt-3" style="color:rgb(104, 62, 69);">
        <h1 class="text-center">Welcome To Our Site E-Coding</h1>
        <br>
        <h2 class="text-center mt-2 mb-2">Categories</h2>
        <div class="row">

            <!-- Fetch all  the categories -->
            <!-- <div class="container col-mb-2"></div> -->
            <?php
            
                 $sql="SELECT * FROM `categories`";

               $result=mysqli_query($conn ,$sql);

               while($row = mysqli_fetch_assoc($result)){
 
             $cat = $row ['category_name'];
               echo'<div class="col-md-3">
                            <div class="card my-2" style="width: 18rem;">
                            <img src="https://source.unsplash.com/400x200/?'.$cat.',coding" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">'.$cat.'</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card\'s content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>';

               }
             ?>

            <!-- Use a for loop to iterate through categories. -->

          


        </div>
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