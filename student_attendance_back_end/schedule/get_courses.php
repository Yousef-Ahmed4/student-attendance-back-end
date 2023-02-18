<?php 
include "../connect.php";

$course_id=filterRequest('id');


$s=$conn->prepare("SELECT course_name FROM courses WHERE  course_id  = ? ");
$s->execute(array($course_id));
$data=$s->fetch(PDO::FETCH_ASSOC);






$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>