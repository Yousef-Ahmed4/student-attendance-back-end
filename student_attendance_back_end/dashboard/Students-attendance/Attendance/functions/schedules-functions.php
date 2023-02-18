<?php 
function schedules_new($scheduleid, $courseid, $doctorid, $groupnumber, $time){
    global $conn;
    $sql = "INSERT INTO schedule (schedule_id, course_id, doctor_id, group_number, time)
     VALUES ('$scheduleid', '$courseid', '$doctorid', '$groupnumber', '$time');";
    mysqli_query($conn, $sql);
}
function schedules_edit($id) {
    global $conn;
    $sql = "SELECT * FROM schedules WHERE schedule_id = '$id'";
    $data = mysqli_query($conn, $sql);
    $sch = mysqli_fetch_assoc($data);
    return $sch;
}
function schedules_update($schedule_id, $course_id, $doctor_id, $group_number, $time) {
    global $conn;
    $sql = "UPDATE schedules SET schedule_id = '$schedule_id', course_id = '$courseid', doctor_id = '$doctorid', group_number = '$groupnumber', time = '$time'  WHERE schedule_id = '$scheduleid'";
    mysqli_query($conn, $sql);
    header("Location: schedules-list.php");
}
?>