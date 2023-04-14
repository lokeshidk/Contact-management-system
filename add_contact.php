<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
	mysqli_query($conn, $sql);
	header('Location: contacts.php');
	exit();
}