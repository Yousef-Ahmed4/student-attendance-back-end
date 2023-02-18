<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
if (isset($_POST["doctorname"])) {
  doctors_new($_POST["doctorid"], $_POST["doctorname"], $_POST["doctorpassword"], $_POST["doctorphone"], $_POST["doctoremail"]);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>New Doctor</title>
    <?php include 'head.php'; ?>
    <?php include 'navbar.php';?>
    
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 mt-4 mb-4  text-light" >New Doctor</h1>
      <div id="wrapper" >
    <form method="post" action="import_doctor_file.php" enctype="multipart/form-data">
      <input type="file" name="file"/>
  
      <button type="submit" name="submit_file" value="Submit" class="btn btn-success"  >Save</button>
      <!-- "login-btn text-primary" -->
    </form>
  </div>
      <div class="row text-light">
        <form action="doctors-new.php" method="post">
          <div class="form-group mb-4 ">
            <label for="doctorName">Doctor ID: </label>
            <input type="text" id="doctorid" name="doctorid" class="form-control" placeholder="Type your Id">
          </div>
          <div class="form-group mb-4">
          <div class="form-group mb-4">
            <label for="doctorName">Doctor Name: </label>
            <input type="text" id="doctorname" name="doctorname" class="form-control" placeholder="Type your Name">
          </div>
          <div class="form-group mb-4">
            <label for="doctorName">Doctor password: </label>
            <input type="password" id="doctorpassword" name="doctorpassword" class="form-control" placeholder="Type your password">
          </div>
          <div class="form-group mb-4">
            <label for="doctorphone">Doctor Phone: </label>
            <input type="text" id="doctorphone" name="doctorphone" class="form-control" placeholder="Type your phone">
          </div>
          <div class="form-group mb-4">
            <label for="doctoremail">Doctor Email: </label>
            <input type="text" id="doctoremail" name="doctoremail" class="form-control" placeholder="Type your email">
          </div>
          <button type="submit" class="btn btn-success">Save</button>
          <a href="Doctors-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>