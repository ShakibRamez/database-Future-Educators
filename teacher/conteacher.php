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
$date_employed = $_POST["date_employed"];
$phone_number = $_POST["phone_number"];
$subject_id = $_POST["subject_id"];

$sql = "INSERT INTO teacher(name, phone_number, date_employed, subject_id) values('$name', '$phone_number', '$date_employed', $subject_id)";

$result = $conn->query($sql);

header("Location: teacher.php?status=success");