<?php 
function students_new($studentid, $studentsname, $studentsemail, $studentspassword, $studentlevel){
    global $conn;
    $sql = "INSERT INTO students (student_id, student_name, email, password, level) VALUES ('$studentid', '$studentsname', '$studentsemail', '$studentspassword', '$studentlevel')";
    mysqli_query($conn, $sql);
    header("Location: students-list.php");
}
function students_edit($id) {
    global $conn;
    $sql = "SELECT * FROM students WHERE student_id = '$id'";
    $data = mysqli_query($conn, $sql);
    $stu = mysqli_fetch_assoc($data);
    return $stu;
}
function students_update($student_id, $studentname, $studentemail, $studentpassword, $studentlevel) {
    global $conn;
    $sql = "UPDATE students SET student_name = '$studentname', email = '$studentemail', password = '$studentpassword', level = '$studentlevel' WHERE student_id = '$student_id'";
    mysqli_query($conn, $sql);
    header("Location: students-list.php");
}

?>