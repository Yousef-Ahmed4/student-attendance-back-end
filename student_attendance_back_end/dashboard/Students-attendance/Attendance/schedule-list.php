<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
$sql = "SELECT s.schedule_id,s.group_number,s.time,c.course_name,d.doctor_name
FROM schedule AS s,courses AS c,doctors AS d
WHERE s.doctor_id = d.doctor_id AND s.course_id=c.course_id
GROUP BY s.schedule_id ";
// "SELECT * FROM schedule";
$sch_list= mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Schedule List</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class = "row">
        <h1 class="display-1 mt-4 mb-4 text-light">Schedules List :</h1>
        <table class="table table-bordered" >
          <tr class="text-light">
              <th>Schedule ID</th>
              <th>Course </th>
              <th>Doctor </th>
              <th>Group Number</th>
              <th>Time</th>
              <th>Action</th>
          </tr>
          <?php while ($schedule = mysqli_fetch_assoc($sch_list)) {
          ?> 
          <tr>
              <td><?php echo $schedule["schedule_id"]?></td>
              <td><?php echo $schedule["course_name"]?></td>
              <td><?php echo $schedule["doctor_name"]?></td>
              <td><?php echo $schedule["group_number"]?></td>
              <td><?php echo $schedule["time"]?></td>
            <td>
            <!-- <a class="btn btn-info text-light" href="schedule-edit.php?id= -->
            <?php
            //  echo $schedule["schedule_id"];
              ?>
            <!-- "> Edit</a> -->
              <a class="btn btn-danger" href="schedule-delete.php?id=<?php echo $schedule["schedule_id"]; ?>"> Delete</a>
            </td>
          </tr>
          <?php } ?>
    </table>
      </div>
    </div>
  </body>
</html>