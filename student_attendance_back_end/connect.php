<?php

$dsn="mysql:host=localhost;dbname=student_attendance";
$user="root";
$password="";

// $option=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
// );
 try{

    $conn=new PDO($dsn,$user,$password );
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    include "functions.php";

}catch(PDOException $e){
        echo $e->getMessage() ;
    }

?>