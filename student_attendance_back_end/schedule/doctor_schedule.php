<?php 
include "../connect.php";

$doctor_id=filterRequest('id');


// $s=$conn->prepare("SELECT * FROM schedule WHERE  doctor_id = ? ");


$s=$conn->prepare(
    "SELECT s.schedule_id,s.group_number,s.time ,c.course_name FROM
     schedule AS s ,courses AS c 
     WHERE s.doctor_id = ? AND s.course_id=c.course_id");

$s->execute(array($doctor_id));
$data=$s->fetchAll(PDO::FETCH_ASSOC);


$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>