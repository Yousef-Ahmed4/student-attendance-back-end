<?php 
function doctors_new($doctorid, $doctorname, $doctorpassword, $doctorphone, $doctoremail){
    global $conn;
    $sql = "INSERT INTO doctors (doctor_id, doctor_name, password, phone, email) VALUES ('$doctorid', '$doctorname', '$doctorpassword', '$doctorphone', '$doctoremail')";
    mysqli_query($conn, $sql);
    header("Location: doctors-list.php");
}
function doctors_edit($id) {
    global $conn;
    $sql = "SELECT * FROM doctors WHERE doctor_id = '$id'";
    $data = mysqli_query($conn, $sql);
    $doc = mysqli_fetch_assoc($data);
    return $doc;
}
function doctors_update($doctor_id, $doctorname, $doctorpassword, $doctorphone, $doctoremail) {
    global $conn;
    $sql = "UPDATE doctors SET doctor_name = '$doctorname', password = '$doctorpassword', phone = '$doctorphone', email = '$doctoremail' WHERE doctor_id = '$doctor_id'";
    mysqli_query($conn, $sql);
    header("Location: doctors-list.php");
}
function get_doctors_by_id($id){
    include('basic.php');
    $sql = "SELECT * FROM doctors WHERE doctor_id = '$id'";
    $data = mysqli_query($conn, $sql);
    $doctors = mysqli_fetch_assoc($data);
    return $doctors;
}
?>