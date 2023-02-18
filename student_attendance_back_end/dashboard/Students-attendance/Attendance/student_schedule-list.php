<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
// $sql = "SELECT * FROM student_schedule";
$student_id = (int)$_GET['id'];

$sql=  "SELECT s.group_number,s.time  ,c.course_name ,d.doctor_name 
FROM student_schedule AS ss,schedule AS s,courses AS c,doctors AS d
WHERE  ss.student_id = $student_id AND ss.schedule_id=s.schedule_id
AND s.course_id=c.course_id AND s.doctor_id =d.doctor_id "; 
$st_sch_list= mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student_Schedule List</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class = "row">
        <h1 class="display-1 mt-4 mb-4 text-light">Student Schedule List :</h1>
        <table class="table table-bordered " >
          <tr class="text-light">
              <th> Course name</th>
              <th> Doctor name</th>
              <th> group number</th>
              <th> Time</th>
          </tr>
          <?php while ($student_schedule = mysqli_fetch_assoc($st_sch_list)) {
          ?> 
          <tr>
              <td><?php echo $student_schedule["course_name"]?></td>
              <td><?php echo $student_schedule["doctor_name"]?></td>
              <td><?php echo $student_schedule["group_number"]?></td>
              <td><?php echo $student_schedule["time"]?></td>
          </tr>
          <?php } ?>
    </table>
      </div>
    </div>
  </body>
</html>