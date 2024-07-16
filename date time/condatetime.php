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

$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$start_date = $_POST["start_date"];
$end_date = $_POST["end_date"];
$subject_id = $_POST["subject_id"];

$sql = "INSERT INTO date_time(start_time, end_time, start_date, end_date, subject_id) VALUES('$start_time', '$end_time', '$start_date', '$end_date', '$subject_id')";

$result = $conn->query($sql);

header("Location: datetime.php?status=success");

// echo "<br>";
// echo "success";