<?php

$insert = false;// for alert
$update = false;
$delete=false;

$servername="localhost";
$username="root";
$password="";
$database="note";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Sorry we are not connected". mysqli_connect_error());
}
// else{
//    echo "Connection was successful <br>";
// }

if(isset($_GET['delete'])){
$sno = $_GET['delete'];
$delete=true;
$sql= "DELETE FROM `note details` WHERE `s.no` = $sno";
$result = mysqli_query($conn,$sql);
    
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if(isset($_POST['snoEdit'])){
    //update the record
    $sno = $_POST['snoEdit'];
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

    $sql="UPDATE `note details` SET `note_name` = '$title' , `note_desc` = '$description' WHERE `s.no` = $sno"; 
    $result = mysqli_query($conn,$sql);
    if($result){  
        $update = true;// for alert
      }
    
  }else{

  $title= $_POST['title'];
  $description = $_POST['description'];

  $sql="INSERT INTO `note details` (`note_name`, `note_desc`) VALUES ('$title', '$description');";
  $result = mysqli_query($conn,$sql);

  if($result){  
    $insert = true;// for alert
  }

}
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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <title>Notes taking make easy - iNotes</title>
</head>


<body>
    <!-- Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
    Edit Modal
  </button> -->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/php prectice/crud.php" method="post">

                        <div class="container my-3">
                            <h2>Add a Note</h2>
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <div class="form-group">
                                <label for="titleEdit">Note Title</label>
                                <input type="text" class="form-control" id="titleEdit" name="titleEdit">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="descriptionEdit">Note Description</label>
                                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"
                                    row="3"></textarea>
                            </div><br>
                            <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Note</button>
                       </div>
                        </div>

                      </div>
                       
                  </form>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(11, 72, 238); padding:17px 0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:#ffffff;">
                <h4>iNotes</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color:#ffffff;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"
                            style="color:#ffffff; padding-left: 35px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"
                            style="color:#ffffff; padding-left: 35px;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"
                            style="color:#ffffff; padding-left: 35px;">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit" style="margin:0 15px;">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
if($insert){

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your notes has been submited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}elseif(!$insert){"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>No!</strong> Your notes has been not submited successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";}
  ?>
    <?php
if($update){

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your notes has been updated successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}elseif(!$update){"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>No!</strong> Your notes has been not updated successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";}
  ?>
    <?php
if($delete){

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your notes has been deleted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}elseif(!$delete){"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>No!</strong> Your notes has been not deleted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";}
  ?>


    <div class="container my-5 " style="width:60%;">
        <h2>Add a Note</h2>
        <form action="/php prectice/crud.php" method="post">
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Note Description</label>
                <textarea class="form-control" id="description" name="description" row="3"></textarea>
            </div><br>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container" style="width:60%;">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

$sql= "SELECT*FROM `note details`";
$result= mysqli_query($conn,$sql);
$sno = 0;
// creating sno variable to print continue sno in our note...........
while($row = mysqli_fetch_assoc($result)){
  $sno = $sno + 1;
  echo" <tr>
  <th scope='row'>". $sno ."</th> 
  <td>". $row['note_name'] ."</td>
  <td>". $row['note_desc'] ."</td>
  <td> <button class ='edit btn btn-sm btn-primary' id=". $row['s.no'] .">Edit</button> 
    <button class ='delete btn btn-sm btn-primary' id=d". $row['s.no'] .">Delete</button></td>
</tr>";
}

?>

            </tbody>
        </table>
    </div>
    <hr>

    <!-- Bootstrap’s compiled CSS and JS to your project -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Using jQurey -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <script>

        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit",);
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                description = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, description);
                titleEdit.value = title;
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                $('#editModal').modal('toggle'); //for modal 
            })

        })
        //delete

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit",);

                sno = e.target.id.substr(1,);

                if (confirm("Are you sure you want ot delete this note!")) { //js confirmation deilog
                    console.log("yes");
                    window.location = `/php prectice/crud.php?delete=${sno}`;//direct url

                } else {
                    console.log("no");
                };
            })
        });
    </script>

</body>

</html>