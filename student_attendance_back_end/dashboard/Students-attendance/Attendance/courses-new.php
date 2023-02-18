<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
if (isset($_POST["coursename"])) {
  courses_new($_POST["courseid"], $_POST["coursename"]);
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>New Course</title>
    <?php include 'head.php'; ?>
    <?php include 'navbar.php';?>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 mt-4 mb-4  text-light">New Course</h1>
      <div class="row text-light">
        <form action="courses-new.php" method="post">
        <div class="form-group mb-4">
            <label for="IDName">Course ID: </label>
            <input type="text" id="courseid" name="courseid" class="form-control " placeholder="Type your Course Id">
        </div>
        <div class="form-group mb-4">
            <label for="courseName">Course Name: </label>
            <input type="text" id="coursename" name="coursename" class="form-control" placeholder="Type your Course Name">
        </div>          
          <button type="submit" class="btn btn-success">Save</button>
          <a href="courses-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>