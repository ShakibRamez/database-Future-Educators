<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

$id = $_GET["id"];
$sql = "delete FROM teacher where id = $id";

$result = $conn->query($sql);


header("Location: teacher.php?status=successDelete");
?>
