<?php
include 'basic.php';

$id = $_GET["id"];
$sql = "DELETE FROM schedule WHERE schedule_id ='$id'";

mysqli_query($conn , $sql);
header("location:schedule-list.php")
?>