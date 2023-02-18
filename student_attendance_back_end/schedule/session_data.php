<?php 
include "../connect.php";

$session_id=filterRequest('session_id');


// $s=$conn->prepare("SELECT * FROM student_schedule WHERE  student_id = ? ");
$s=$conn->prepare(
    "SELECT s.group_number ,c.course_name ,d.doctor_name ,se.session_num 
     FROM sessions AS se,schedule AS s,courses AS c,doctors AS d
     WHERE  se.session_id = ? AND se.schedule_id=s.schedule_id
     AND s.course_id=c.course_id AND s.doctor_id =d.doctor_id ");


$s->execute(array($session_id));
$data=$s->fetch(PDO::FETCH_ASSOC);


$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>