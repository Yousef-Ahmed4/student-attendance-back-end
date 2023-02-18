<?php 
include "../connect.php";

$student_id   =   filterRequest('student_id');
$session_id   =   filterRequest('session_id');


$test=$conn->prepare("SELECT * FROM attendance WHERE `student_id` = ? AND `session_id` = ? ");
$test->execute(array($student_id ,$session_id));


$count=$test->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "fail"));
    
} else {
    $s=$conn->prepare("INSERT INTO attendance (student_id , session_id) VALUES (? , ? ) ");
    $s->execute(array($student_id,$session_id));
    echo json_encode(array("status" => "success")); 
}





?>