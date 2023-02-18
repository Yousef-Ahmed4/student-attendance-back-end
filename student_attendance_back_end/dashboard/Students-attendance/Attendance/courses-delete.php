<?php
include 'basic.php';
$id = $_GET["id"];
$sql = "DELETE FROM courses WHERE course_id ='$id'";

mysqli_query($conn , $sql);
header("location:courses-list.php")
?>