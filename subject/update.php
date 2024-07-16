<?php

$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);




$name = $_POST["name"];
$id = $_POST["id"];
$descrption = $_POST["description"];
$cat_subject_id = $_POST["cat_subject_id"];



$sql = "UPDATE subjects set name = '$name', description = '$descrption', cat_subject_id = '$cat_subject_id'  where id = $id";

$conn->query($sql);

header("Location: subject.php?status=successupdate");

?>