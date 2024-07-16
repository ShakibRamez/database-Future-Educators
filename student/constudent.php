<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);
if($conn){
    echo "connected";
}else{
    echo "not connected";
}




$name = $_POST["name"];
$last_name = $_POST["last_name"];
$phone_number = $_POST["phone_number"];
$date_start = $_POST["date_start"];
$teacher_id = $_POST["teacher_id"];

$sql = "INSERT INTO students(name, last_name, phone_number, date_start, teacher_id ) values('$name', '$last_name', '$phone_number', '$date_start', '$teacher_id')";

$conn->query($sql);

header("Location: student.php?status=success");


?>