<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
  header("location: loginsystem_login.php");
  
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="styletsheet_welcome.css">

  <title> Welcome-
    <?php echo $_SESSION['username'] ?>
  </title>

</head>

<body>
  <?php require 'loginsystem_nav.php' ?>

  <main>

    <div class="container mt-5 me-5">
      <hr>
      <h1 class="display-4"><b>Healthy lifestyle:Tips For You
         
          <div class="life" style="margin-left: 394px;">
          Welcome-<?php echo $_SESSION['username'] ?></div>
        </b></h1>

    </div>

    <div class="photo"  style="margin-top: 5px; margin-left: 380px; width: 46%;">
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="front.jpg" alt="front" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="yoga.jpg" alt="middle" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="eat.jpg" alt="end" class="d-block">
          </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

      <div class="tip1">
        <h1>Healthy lifestyle and longevity</h1>

        <p>Researchers from the Harvard T.H. Chan School of Public Health conducted a massive study of the impact of
          health habits on life expectancy, using data from the well-known Nurses’ Health Study (NHS) and the Health
          Professionals Follow-up Study (HPFS). This means that they had data on a huge number of people over a very
          long period of time. The NHS included over 78,000 women and followed them from 1980 to 2014. The HPFS
          included
          over 40,000 men and followed them from 1986 to 2014. This is over 120,000 participants, 34 years of data for
          women, and 28 years of data for men.
          <br><br>
          The researchers looked at NHS and HPFS data on diet, physical activity, body weight, smoking, and alcohol
          consumption that had been collected from regularly administered, validated questionnaires.
        </p>
      </div>
      <hr style="margin-left: 191px;">
      <div class="tip2">
        <h1>What is a healthy lifestyle, exactly?</h1>
        <p>These five areas were chosen because prior studies have shown them to have a large impact on risk of
          premature death. Here is how these healthy habits were defined and measured:</p>

        <h5>1.Healthy diet-</h5>
        <p>which was calculated and rated based on the reported intake of healthy foods like vegetables, fruits, nuts,
          whole grains, healthy fats, and omega-3 fatty acids, and unhealthy foods like red and processed meats,
          sugar-sweetened beverages, trans fat, and sodium.</p>

        <h5>2.Healthy physical activity level-</h5>
        <p>which was measured as at least 30 minutes per day of moderate to vigorous activity daily.</p>

        <h5>3.Healthy body weight-</h5>
        <p>defined as a normal body mass index (BMI), which is between 18.5 and 24.9.</p>

        <h5>4.Smoking, well-</h5>
        <p>there is no healthy amount of smoking. "Healthy" here meant never having smoked.</p>

        <h5>5.Moderate alcohol intake-</h5>
        <p>which was measured as between 5 and 15 grams per day for women, and 5 to 30 grams per day for men.
          Generally,
          one drink contains about 14 grams of pure alcohol. That's 12 ounces of regular beer, 5 ounces of wine, or
          1.5
          ounces of distilled spirits.<br>

          Researchers also looked at data on age, ethnicity, and medication use, as well as comparison data from the
          National Health and Nutrition Examination Surveys and the Centers for Disease Control and Prevention's
          Wide-Ranging Online Data for Epidemiologic Research.</p>
      </div>
  </main>
  <footer>
    <!-- <div class="foot">

        <span class="headding" style="width:500px;">DO YOU WANT TO LOG OUT THEN <br>CHECK THIS BUTTON</span>
        <button class="form-control" class="sub1" type="submit"
        style="width:272px; height: 96px; position:absolute; left:1045px;top:1346px;color:rgb(253, 45, 8);" onclick="window.location.href='loginsystem_logout.php';"><strong >
         <h1>LOG OUT</h1></strong></button>
    </div> -->


  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>