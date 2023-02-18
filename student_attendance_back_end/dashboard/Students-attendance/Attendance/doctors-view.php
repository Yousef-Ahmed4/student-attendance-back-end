<?php
include('functions/all.php');
include 'helper.php';
session_start();
if (!checkLogin())
    exit('you must loggen first');
$doc_info = get_doctors_by_id($_GET["v"]);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  </head>
  <body>
  <?php include 'head.php'; ?>
    <?php include 'navbar.php'; ?>
      <table border="1">
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>ID</th>
        </tr>
        <tr>
          <td><?php echo $doc_info["doctor_name"]; ?></td>
          <td><?php echo $doc_info["phone"]; ?></td>
          <td><?php echo $doc_info["email"]; ?></td>
          <td><?php echo $doc_info["doctor_id"]; ?></td>
        </tr>
      </table>
  </body>
</html>
