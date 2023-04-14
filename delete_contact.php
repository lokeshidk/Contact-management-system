<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');


if(isset($_GET['id'])){


	$id = $_GET['id'];
	$sql = "DELETE FROM contacts WHERE id=$id";
	mysqli_query($conn, $sql);


	header('Location: contacts.php');
	exit();
}
?>
