<?php
$host='localhost';
$username="root";
$password="";
$database="login";
$conn = mysqli_connect('localhost', 'root', '', 'login');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$password')";
mysqli_query($conn, $sql);
header('Location: iglogin.php');
exit();