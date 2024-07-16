<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);





$date_id = $_POST["date_id"];
$teacher_id = $_POST["teacher_id"];


$sql = "INSERT INTO teacher_date_time(date_id, teacher_id) values('$date_id', '$teacher_id')";

$conn->query($sql);

header("Location: teacherdatetime.php?status=success");


?>