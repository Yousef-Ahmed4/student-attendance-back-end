<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');  
$sql = "SELECT * FROM students";
$st_list= mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Students List</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class = "row">
        <h1 class="display-1 mt-4 mb-4 text-light">Students List :</h1>
        <table class="table table-bordered">
          <tr class="text-light">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Level</th>
              <th>Action</th>
          </tr>
          <?php while ($students = mysqli_fetch_assoc($st_list)) {
          ?> 
          <tr>
              <td><?php echo $students["student_id"]?></td>
              <td><?php echo $students["student_name"]?></td>
              <td><?php echo $students["email"]?></td>
              <td><?php echo $students["level"]?></td>
            <td>
            <a class="btn btn-info text-light" href="students-edit.php?id=<?php echo $students["student_id"]; ?>"> Edit</a>
            <a class="btn btn-danger" href="students-delete.php?id=<?php echo $students["student_id"]; ?>&action=delete"> Delete</a>
            <a class="btn btn-dark" href="student_schedule-list.php?id=<?php echo $students["student_id"]; ?>"> student schudle</a>
            </td>
          </tr>
          <?php } ?>
    </table>
      </div>
    </div>
  </body>
</html>