<?php
include_once("config.php"); 

$query= "select * from arfa";
$result=mysqli_query($connect , $query);





?>











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">

<title>Show Table</title>
</head>
<body>
    <div class="container ">
            <div class="col d-flex justify-content-between align-items-center">
                <h1 class="display-3 text-primary fw-bold mt-3">Student Table</h1>
                <a href="index.php" class="btn btn-primary">Move to</a>
            </div>
        </div>
    


    <table class="table table-bordered">
        <thead>
            <tr class="table-success">
                <th>Student Id</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $values){?>
            <tr>
                <td><?php echo $values["std_id"]?></td>
                <td><?php echo $values["std_name"]?></td>
                <td> <?php echo $values["std_email"] ?></td>
                <td><?php echo $values["std_age"] ?></td>
                <td>
                    <a href="update.php?id=<?php echo $values["std_id"]?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="delete.php?id=<?php echo $values["std_id"]?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>