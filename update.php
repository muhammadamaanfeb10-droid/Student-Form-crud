<?php
include_once("config.php");
// print_r($_GET);
$selectedid = $_GET["id"];
$query = "select * from arfa where std_id = '$selectedid'";
$result = mysqli_query($connect , $query);

foreach($result as $std){
    $stdId=$std["std_id"];
    $stdName=$std["std_name"];
    $stdEmail=$std["std_email"];
    $stdAge=$std["std_age"];

}
echo $stdId;
echo $stdName;
echo $stdEmail;
echo $stdAge;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <title>Title</title>
</head>

<body>

<?php
// include_once("config.php");
if(isset($_POST['sbtn'])){
    $sname = $_POST['sname'];
    $semail = $_POST['semail'];
    $sage = $_POST['sage'];
    $query = "Update arfa set std_name = '$sname' , std_age = '$sage' ,std_email = '$semail' where std_id = '$selectedid' ";
    $result = mysqli_query($connect ,$query );
    if( $result ){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Updated Successfully</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>window.location.href="read.php"</script>'
;
}
else{
     echo '<script><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Doesnot Update</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> </script>';
}
}
?>







    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST" class="needs-validation" novalidate>
                    <h1 class="display-3 text-primary fw-bold mt-4">Update Your Record</h1>
                    <hr>
                    <div class="form-group mt-4">
                        <label for="" class="form-lable">Student Name</label>
                        <input type="text" name="sname" placeholder="Enter Your Name" class="form-control" required value="<?php echo $stdName ?>">
                        <div class="valid-feedback">
                            Name is correct
                        </div>
                         <div class="invalid-feedback">
                            Name is incorrect
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="" class="form-lable">Student Email</label>
                        <input type="Email" name="semail" placeholder="Enter Your valid Email" class="form-control" required value="<?php echo $stdEmail ?>">
                         <div class="valid-feedback">
                            Email is correct
                        </div>
                         <div class="invalid-feedback">
                            Email is incorrect
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="" class="form-lable">Student Age</label>
                        <input type="text" name="sage" placeholder="Ente your Age" class="form-control" value="<?php echo $stdAge ?>">
                    </div>
                    <!-- <div class="form-group mt-4">
                        <label for="">feedback</label>
                        <textarea name="" placeholder="Give Us your feedback" class="form-control"></textarea>
                    </div> -->
                    <div class="form-group mt-4 ">
                        <input type="submit" value="Update "  name="sbtn" class="btn btn-primary ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
</body>

</html>

