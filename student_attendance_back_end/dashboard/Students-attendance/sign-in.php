<?php
include 'Attendance/helper.php';
include 'Attendance/basic.php';
session_start();
if (checkLogin())
    exit('you already logged in');
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT  * FROM `moderator`  WHERE `email` ='$email' AND `password`='$password' ";
    $query = mysqli_query($conn, $sql);
    $res = mysqli_num_rows($query);

    if ($res > 0) {
        $_SESSION['userdata'] = $email;
        header('LOCATION:Attendance/doctors-list.php');
    } else {
        header('LOCATION:sign-in.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login to your Account - <?php
     echo $companyName;
      ?>
  </title>
    <link rel="stylesheet" href="Attendance/css/bootstrap.min.css">
    <link rel="stylesheet" href="Attendance/css//styles.css">

  </head>
  <body>

  <form action="sign-in.php" method="post">
  <section>
  <?php if(isset($error)) { ?>
              <p class="alert alert-danger col-12 mt-4"> <?php echo $error; ?></p>
        <?php  } ?>

    <h1 class="text-primary">Sign-in</h1>
    <div class="login-form text-primary">
      <h4>Email</h4>
      <div class="username-input">
        <i class="fas fa-user"></i>
        <input name="email" type="text" placeholder="Type your Email">
      </div>
      <h4>Password</h4>
      <div class="password-input">
        <i class="fas fa-lock"></i>
        <input name="password" type="password" placeholder="Type your password">
      </div>
        </br>
    <button type="submit" class="login-btn text-primary">
      LOGIN
    </button>
    <div class="alternative-signup">
    </div>
  </section>
  </form>

    <!-- <div class="container">
    <div class="row">
        <?php if(isset($error)) { ?>
              <p class="alert alert-danger col-12 mt-4"> <?php echo $error; ?></p>
        <?php  } ?>
      </div>
      <h1 class="display-1 text-primary mt-5 mb-5">Login to your Account</h1>
      <div class="row">
        <form action="sign-in.php" method="post">
          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary mt-5 " >Log in</button>
        </form>
      </div> -->
    </div>


    <script src="Attendance/js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="Attendance/js/script.js" charset="utf-8"></script>
  </body>
</html>
