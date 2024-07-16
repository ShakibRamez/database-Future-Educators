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

$salary = $_POST["salary"];
$teacher_id = $_POST["teacher_id"];

$sql = "INSERT INTO salary(salary, teacher_id) Values('$salary', '$teacher_id')";


$result = $conn->query($sql);

header("Location: salary.php?status=success");

