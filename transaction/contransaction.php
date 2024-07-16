<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);





$amount = $_POST["amount"];
$date_time = $_POST["date_time"];
$salary_id = $_POST["salary_id"];


$sql = "INSERT INTO transactions(amount, date_time, salary_id) values('$amount', '$date_time', '$salary_id')";

$conn->query($sql);

header("Location: transaction.php?status=success");


?>