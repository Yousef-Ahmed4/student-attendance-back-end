<?php

// include "basic.php";
include "../../../connect.php";
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $schedule_id = $csv[0];
  $course_id = $csv[1];
  $doctor_id = $csv[2];
  $group_number = $csv[3];
  $time = $csv[4];

// شوف انت بتبعت الجملة ب اي مش هتفرق 
// غير بس ف الجزء دا وظبطو على حسب الجدول اللي هتعملو فيه 
// ****************************
  $s=$conn->prepare(
    "INSERT INTO schedule VALUES ('$schedule_id','$course_id','$doctor_id','$group_number','$time')");
  $s->execute();
  
// ****************************
 }
 header("location:schedule-list.php");
}

?>