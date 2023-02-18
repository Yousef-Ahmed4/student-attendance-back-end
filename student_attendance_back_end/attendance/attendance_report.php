<?php 
include "../connect.php";

$schedule_id =filterRequest('id');


// , COUNT(a.student_id) AS student_attendance
$s=$conn->prepare(
    "SELECT a.student_id ,st.student_name ,COUNT(a.student_id) AS student_attendance
     FROM schedule AS s ,sessions AS se,attendance AS a,students AS st 
     WHERE s.schedule_id  = ? AND s.schedule_id=se.schedule_id 
     AND se.session_id=a.session_id AND a.student_id=st.student_id
     GROUP BY a.student_id");

$s->execute(array($schedule_id ));
$data=$s->fetchAll(PDO::FETCH_ASSOC);


$count=$s->rowCount();   
if ($count>0) {
    echo json_encode(array("status" => "success" , "data" => $data));
} else {
    echo json_encode(array("status" => "fail"));
}



?>