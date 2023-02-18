<?php

include "connect.php";
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $doctor_id = $csv[0];
  $doctor_name = $csv[1];
  $password = $csv[2];
  $phone = $csv[3];
  $email = $csv[4];

// شوف انت بتبعت الجملة ب اي مش هتفرق 
// غير بس ف الجزء دا وظبطو على حسب الجدول اللي هتعملو فيه 
// ****************************
  $s=$conn->prepare(
    "INSERT INTO doctors VALUES ('$doctor_id','$doctor_name','$password','$phone','$email','1')");
  $s->execute();
// ****************************
 }
}
?>