<?php 
include "../connect.php";


$schedule_id= filterRequest('schedule_id');
$session_num =filterRequest('session_num');

$session_id    = $schedule_id . "_" . $session_num  ;


$test=$conn->prepare("SELECT * FROM sessions WHERE `session_id` = ? ");
$test->execute(array($session_id));






$count=$test->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "fail"));
} else {
    $s=$conn->prepare("INSERT INTO sessions (session_id,schedule_id,session_num) VALUES (?,?,? ) ");
    $s->execute(array($session_id,$schedule_id,$session_num));
    echo json_encode(array("status" => "success"));
}




?>