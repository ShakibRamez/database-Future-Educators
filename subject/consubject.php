<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);


$name = $_POST["name"];
$descrption = $_POST["description"];
$cat_subject_id = $_POST["cat_subject_id"];


$sql = "INSERT INTO subjects(name, description, cat_subject_id) VALUES('$name', '$descrption', '$cat_subject_id')";


$result = $conn->query($sql);

header("Location: subject.php?status=success");

