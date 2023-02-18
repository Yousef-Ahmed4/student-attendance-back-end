<?php 
include "../connect.php";

$student_id=filterRequest('id');


// $s=$conn->prepare("SELECT * FROM student_schedule WHERE  student_id = ? ");
$s=$conn->prepare(
    "SELECT s.group_number,s.time  ,c.course_name ,d.doctor_name 
     FROM student_schedule AS ss,schedule AS s,courses AS c,doctors AS d
     WHERE  ss.student_id = ? AND ss.schedule_id=s.schedule_id
     AND s.course_id=c.course_id AND s.doctor_id =d.doctor_id ");


$s->execute(array($student_id));
$data=$s->fetchAll(PDO::FETCH_ASSOC);


$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>