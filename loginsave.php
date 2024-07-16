<?php
$servername = "localhost";
$user_name = "root";
$password = "";
$db_name = "futureeducators";

$conn = new mysqli ($servername, $user_name, $password, $db_name);

session_start();
$username = $_POST['username'];
$userpassword = $_POST['password'];

$sql = "SELECT * from users where name = '$username' and password = '$userpassword'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $_SESSION["logged_in"]= true;
    header('location: adminpanel.php');
}else{
    header('location: login.php');
}



?>