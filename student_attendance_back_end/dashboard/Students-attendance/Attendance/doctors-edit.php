<?php
include 'basic.php';
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
if (isset($_POST["doctorname"])) {
  doctors_update($_POST["doctorid"], $_POST["doctorname"], $_POST["doctorpassword"], $_POST["doctorphone"], $_POST["doctoremail"]);
}

$doc = doctors_edit($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>doctor Edit</title>
    <?php include 'head.php';?>
    <?php include 'navbar.php';?>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 mt-4 mb-4 text-light">Doctor Edit :</h1>
      <div class="row text-light">
        <form action="doctors-edit.php" method="post">
        <div class="form-group mb-4">
            <label for="IDName">Doctor ID: </label>
            <input type="text" id="doctorid" name="doctorid" class="form-control" value="<?php echo $doc["doctor_id"]; ?>" placeholder="Edit your Id">
        </div>
        <div class="form-group mb-4">
            <label for="doctorName">Doctor Name: </label>
            <input type="text" id="doctorname" name="doctorname" class="form-control" value="<?php echo $doc["doctor_name"]; ?>" placeholder="Edit your Name">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Doctor Password: </label>
            <input type="password" id="doctorpassword" name="doctorpassword" class="form-control" value="<?php echo $doc["password"]; ?>" placeholder="Edit your Password">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Doctor Phone: </label>
            <input type="text" id="doctorphone" name="doctorphone" class="form-control" value="<?php echo $doc["phone"]; ?>" placeholder="Edit your Phone">
        </div>          
        <div class="form-group mb-4">
            <label for="doctorName">Docto Email: </label>
            <input type="text" id="doctoremail" name="doctoremail" class="form-control" value="<?php echo $doc["email"]; ?>" placeholder="Edit your Email">
        </div>          
          <a href="doctors-list.php"><button type="submit" class="btn btn-success">Save</button></a>
          <a href="doctors-list.php" class="btn btn-secondary">Back</a>
        </form>
      </div>
    </div>
  </body>
</html>