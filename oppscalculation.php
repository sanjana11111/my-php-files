<?php

error_reporting(0);
    //Using Opps to calculate number

     class Calculation{

    public $a;
    public $b;
    public $c;
        public function sum(){

            $this->c = $this->a + $this->b;

            return $this->c;
        }
    }
    $addition = new calculation();

    $addition->b =$_GET['secondvalue'];
    $addition->a =$_GET['firstvalue'];

    $sum= $addition->sum();
    ?>


<!--for find the method name>>>>>>>> echo $_SERVER['REQUEST_METHOD']; -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <div class="container" style="padding:200px;">
        <center>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="firstvalue" class="col-form-label">
                            <h4>Enter First Value:</h4>
                        </label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="firstvalue" name="firstvalue" class="form-control"
                            aria-describedby="firstvalue">
                    </div>
                    <br>
                    <div class="col-auto">
                        <label for="secondvalue" class="col-form-label">
                            <h4>Enter Second Value:</h4>
                        </label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="secondvalue" name="secondvalue" class="form-control"
                            aria-describedby="firstvalue">
                    </div>
                    <div class="container">
                        <input type="Submit" class="btn btn-primary btn-lg" id="ubmit" name="Submit">

                    </div>
                    <br>
                    <div class="container">
                    <textarea disabled class="form-control" placeholder="0" id="floatingTextarea2"
                            style="height:100px; text-align:center; font-size:50px;"><?php echo $sum; ?></textarea>
                    
                    </div>

                </div>
            </form>
        </center>
    </div>
</body>

</html>