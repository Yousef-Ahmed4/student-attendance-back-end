<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
if (isset($_POST["studentname"])) {
  students_update($_POST["studentid"], $_POST["studentname"], $_POST["studentemail"], $_POST["studentpassword"], $_POST["studentlevel"]);
}

$stu = students_edit($_GET["id"]);
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
      <h1 class="display-1 mt-4 mb-4 text-light">Students Edit :</h1>
      <div class="row text-light">
        <form action="students-edit.php" method="post">
        <div class="form-group mb-4">
            <label for="IDName">Students ID: </label>
            <input type="text" id="studentid" name="studentid" class="form-control" value="<?php echo $stu["student_id"]; ?>" placeholder="Edit your Id">
        </div>
        <div class="form-group mb-4">
            <label for="doctorName">Students Name: </label>
            <input type="text" id="studentname" name="studentname" class="form-control" value="<?php echo $stu["student_name"]; ?>" placeholder="Edit your Name">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Students Email: </label>
            <input type="text" id="studentemail" name="studentemail" class="form-control" value="<?php echo $stu["email"]; ?>" placeholder="Edit your Password">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Students Password: </label> 
            <input type="password" id="studentpassword" name="studentpassword" class="form-control" value="<?php echo $stu["password"]; ?>" placeholder="Edit your Phone">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Students Level: </label>
            <input type="text" id="studentlevel" name="studentlevel" class="form-control" value="<?php echo $stu["level"]; ?>" placeholder="Edit your Email">
        </div>          
          <a href="Students-list.php"><button type="submit" class="btn btn-success">Save</button></a>
          <a href="Students-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>