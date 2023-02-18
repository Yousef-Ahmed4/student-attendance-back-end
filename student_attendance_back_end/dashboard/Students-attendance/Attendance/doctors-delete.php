<?php
include 'basic.php';

$id = $_GET["id"];
$sql = "DELETE FROM doctors WHERE doctor_id ='$id'";

mysqli_query($conn , $sql);
header("location:doctors-list.php")
?>