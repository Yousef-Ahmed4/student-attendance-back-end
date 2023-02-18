<?php
include 'basic.php';

$id = $_GET["id"];
$sql = "DELETE FROM students WHERE student_id ='$id'";

mysqli_query($conn , $sql);
header("location:students-list.php")
?>