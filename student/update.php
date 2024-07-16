<?php

$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);




$name = $_POST["name"];
$id = $_POST["id"];
$last_name = $_POST["last_name"];
$phone_number = $_POST["phone_number"];
$date_start = $_POST["date_start"];
$teacher_id = $_POST ["teacher_id"];






$sql = "UPDATE students set name = '$name', last_name = '$last_name', phone_number = '$phone_number', date_start = '$date_start', teacher_id = '$teacher_id',   where id = $id";

$conn->query($sql);

header("Location: student.php?status=successupdate");

?>