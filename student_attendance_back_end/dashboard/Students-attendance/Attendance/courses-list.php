<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
$sql = "SELECT * FROM courses";
$cour_list= mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Courses List</title>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="container">
      <div class = "row">
        <h1 class="display-1 mt-4 mb-4 text-light">Courses List :</h1>
        <table class="table table-bordered">
          <tr class="text-light">
              <th> ID</th>
              <th> Name</th>
              <th>Action</th>
          </tr>
          <?php while ($courses = mysqli_fetch_assoc($cour_list)) {
          ?> 
          <tr>
              <td><?php echo $courses["course_id"]?></td>
              <td><?php echo $courses["course_name"]?></td>
            <td>
            <a class="btn btn-info text-light "  href="courses-edit.php?id=<?php echo $courses["course_id"]; ?>"> Edit</a>    
            <a class="btn btn-danger" href="courses-delete.php?id=<?php echo $courses["course_id"]; ?>&action=delete"> Delete</a>
            </td>
          </tr>
          <?php } ?>
    </table>
      </div>
    </div>
  </body>
</html>