<?php 
include 'basic.php';
include 'head.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="doctors-list.php"><img id="logo" src="img/<?php echo $logo;?> "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Doctors
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="doctors-list.php">Doctors List</a></li>
          <li><a class="dropdown-item" href="doctors-new.php">Doctors New</a></li>
        </ul>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="courses-list.php">Courses List</a></li>
            <li><a class="dropdown-item" href="courses-new.php">Courses New</a></li>
          </ul>
        </li>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Schedule
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="schedule-list.php">Schedule List</a></li>
            <li><a class="dropdown-item" href="schedule-new.php">Schedule new</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Students
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="students-list.php">Students List</a></li>
            <li><a class="dropdown-item" href="students-new.php">Students New</a></li>
          </ul>
          </li>
            
        </li>
      </ul>

      <div class="ml-auto">
        <a class="form-control btn btn-outline-secondary" type="LogouT" placeholder="LogouT" aria-label="Search"  style="float-right"  role="button" href="../logout.php"> Log out</a>
      </div>

    </div>
  </div>
</nav>
</body>
