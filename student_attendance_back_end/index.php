<?php 
include "connect.php";
//     $s=$conn->prepare("SELECT * FROM users ");
//     $s->execute();
//     $s1=$conn->prepare("INSERT INTO users (name , email) VALUES ('YOYO' , 'yoyo@YAHOO.COM') ");
//     $s1->execute();
//     $s->execute();



//     // $users=$s->fetchColumn();
//     $users=$s->fetchAll(PDO::FETCH_ASSOC);
//     $count=$s1->rowCount();
//     echo $count;
// echo json_encode( $users);

// $s=$conn->prepare("DELETE FROM `users` WHERE id=6");
// $s->execute();
header("dashboard/Students-attendance/sign-in.php");

?>