<?php
include 'helper.php';
include 'basic.php';
session_start();
if (!checkLogin())
    exit('you must loggen First');
$sql = "SELECT * FROM doctors";
$doc_list= mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doctors List</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <div class="doctor_img"></div>
    <div class="container">
      <div class = "row">
        <h1 class="display-1 mt-4 mb-4 text-light">Doctors List :</h1>
        <table class="table table-bordered">
          <tr class="text-light" >
              <th >ID</th>
              <th >Name</th>
              <th >Phone</th>
              <th >Email</th>
              <th >Action</th>
          </tr>
          <?php while ($doctors = mysqli_fetch_assoc($doc_list)) {
          ?> 
          <tr>
              <td><?php echo $doctors["doctor_id"]?></td>
              <td><?php echo $doctors["doctor_name"]?></td>
              <td><?php echo $doctors["phone"]?></td>
              <td><?php echo $doctors["email"]?></td>
            <td>
                <a class="btn btn-info text-light" href="doctors-edit.php?id=<?php echo $doctors["doctor_id"]; ?>"> Edit</a>
                <a class="btn btn-danger" href="doctors-delete.php?id=<?php echo $doctors["doctor_id"]; ?>&action=delete"> Delete</a>
            </td>
          </tr>
          <?php } ?>
    </table>
      </div>
    </div>
  </body>
</html>