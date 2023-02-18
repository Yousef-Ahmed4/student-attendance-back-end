<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
if (isset($_POST["studentname"])) {
    students_new($_POST["studentid"], $_POST["studentname"], $_POST["studentemail"], $_POST["studentpassword"], $_POST["studentlevel"]);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>New Student</title>
    <?php include 'head.php'; ?>
    <?php include 'navbar.php';?>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 mt-4 mb-4 text-light" >New student</h1>
      <div class="row text-light">
        <form action="students-new.php" method="post">
          <div class="form-group mb-4 ">
            <label for="studentName">Student ID: </label>
            <input type="text" id="studentid" name="studentid" class="form-control" placeholder="Type your Id">
          </div>
          <div class="form-group mb-4">
          <div class="form-group mb-4">
            <label for="studentName">Student Name: </label>
            <input type="text" id="studentname" name="studentname" class="form-control" placeholder="Type your Name">
          </div>
          <div class="form-group mb-4">
            <label for="studentemail">Student email: </label>
            <input type="email" id="studentemail" name="studentemail" class="form-control" placeholder="Type your email">
          </div>
          <div class="form-group mb-4">
            <label for="studentname">Student password: </label>
            <input type="password" id="studentpassword" name="studentpassword" class="form-control" placeholder="Type your password">
          </div>
          <div class="form-group mb-4">
            <label for="student level">Student level: </label>
            <input type="text" id="studentlevel" name="studentlevel" class="form-control" placeholder="Type your level">
          </div>
          <button type="submit" class="btn btn-success">Save</button>
          <a href="Doctors-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>