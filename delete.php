<?php
include_once("config.php");

$selectedid = $_GET["id"];
// echo ("$selectedid");    
$query = "delete from arfa where std_id = '$selectedid'";
$result =  mysqli_query($connect , $query);
if($result){
    echo"<script> alert('Data deleted Successfully');window.location.href = 'read.php'</script>"
    ;
}
else{
    echo "<script>alert('Error');</script>";
}
?>