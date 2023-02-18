<?php 
include "../connect.php";

$id=filterRequest('id');
$password=filterRequest('password');

$s=$conn->prepare("SELECT * FROM doctors WHERE `password` = ? AND doctor_id = ? ");
$s->execute(array($password,$id));

$data=$s->fetch(PDO::FETCH_ASSOC);

$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>