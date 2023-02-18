<?php 
function courses_new($courseid, $coursename){
    global $conn;
    $sql = "INSERT INTO courses (course_id, course_name) VALUES ('$courseid', '$coursename')";
    mysqli_query($conn, $sql);
    header("Location: courses-list.php");
}
function courses_edit($id) {
    global $conn;
    $sql = "SELECT * FROM courses WHERE course_id = '$id'";
    $data = mysqli_query($conn, $sql);
    $cour = mysqli_fetch_assoc($data);
    return $cour;
}
function courses_update($courseid, $coursename) {
    global $conn;
    $sql = "UPDATE courses SET course_name = '$coursename' WHERE course_id = '$courseid'";
    mysqli_query($conn, $sql);
    header("Location: courses-list.php");
}
?>