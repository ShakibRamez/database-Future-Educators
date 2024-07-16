<?php

$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);




$name = $_POST["name"];
$id = $_POST["id"];
$descrption = $_POST["description"];
$number = $_POST["number"];
$date = $_POST["date"];



$sql = "UPDATE category set name = '$name', description = '$descrption', number = '$number', date = '$date' where id = $id";

$conn->query($sql);

header("Location: category.php?status=successupdate");

?>