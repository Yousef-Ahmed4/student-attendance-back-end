<?php
// function check_user($username){
//   global $conn;
//   $sql = "SELECT count(id) AS username FROM moderator WHERE username = '$username'";
//   $data = mysqli_query($conn, $sql);
//   $rec = mysqli_fetch_assoc($data);
//   return $rec["users"];
//   echo "ok";
// }

// function create_user($moderator, $username, $password){
//   global $conn;
//   $pass = password_hash($password, PASSWORD_BCRYPT);
//   $sql = "UPDATE moderator SET username = '$username', password = '$pass' WHERE id = '$moderator'";
//   mysqli_query($conn, $sql);
//   header('Location: sign-in.php');
// }

// function get_user($username){
//   global $conn;
//   $sql = "SELECT * FROM moderator WHERE username = '$username'";
//   $data = mysqli_query($conn, $sql);
//   $user = mysqli_fetch_assoc($data);
//   return $user;
// }
// session_start();

// if (isset($_POST['email'])) {

//     $email = $_POST['email'];

//     $conn = mysqli_connect("localhost", "root", "", "student_attendance");
//     $sql = "SELECT  * FROM `moderator`  WHERE `email` ='$email' ";
//     $query = mysqli_query($conn, $sql);
//     $res = mysqli_num_rows($query);

//     if ($res > 0) {
//         $_SESSION['userdata'] = $email;
//         header('LOCATION:home.php');
//     } else {
//         header('LOCATION:form.html');
//     }
// }
?>
