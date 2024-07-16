<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);





$name = $_POST["name"];
$descrption = $_POST["description"];
$number = $_POST["number"];
$date = $_POST["date"];
$status = $_POST["status"];

$sql = "INSERT INTO category(name, description, number, date, status) values('$name', '$descrption', '$number', '$date', '$status')";

$conn->query($sql);

header("Location: category.php?status=success");


?>