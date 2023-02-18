<?php 
include "../connect.php";

$name=filterRequest('name');
$email=filterRequest('email');
$password=filterRequest('password');




$s=$conn->prepare("INSERT INTO users (name , email,password) VALUES (? , ? ,?) ");
$s->execute(array($name,$email,$password));

$count=$s->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}



?>