<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>Course Edit</title>
    <?php include 'head.php';?>
    <?php include 'navbar.php';?>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 mt-4 mb-4 text-light">Schedule Edit :</h1>
      <div class="row  text-light">
        <form action="schedule-edit.php" method="post">
        <div class="form-group mb-4">
            <label for="scheduleid">Schedule ID: </label>
            <input type="text" id="scheduleid" name="scheduleid" class="form-control" placeholder="Edit your Schedule Id">
        </div>
        <div class="form-group mb-4">
            <label for="courseid">Course ID: </label>
            <input type="text" id="courseid" name="courseid" class="form-control" placeholder="Edit your Course Id">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorid">Doctor ID </label>
            <input type="text" id="doctorid" name="doctorid" class="form-control" placeholder="Edit your Doctor Id">
        </div>          
        <div class="form-group mb-4">
            <label for="groupnumber ">Group Number </label>
            <input type="text" id="groupnumber " name="groupnumber" class="form-control" placeholder="Edit  your Group Number">
        </div>          
        <div class="form-group mb-4">
            <label for="time">Time </label>
            <input type="text" id="time" name="time" class="form-control" placeholder="Edit your Time">
        </div>          
          <a href="schedule-list.php"><button type="submit" class="btn btn-success">Save</button></a>
          <a href="schedule-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>