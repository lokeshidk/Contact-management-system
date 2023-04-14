<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');


if(isset($_GET['id'])){

	$id = $_GET['id'];
	$sql = "SELECT * FROM contacts WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];


		$sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone' WHERE id=$id";
		mysqli_query($conn, $sql);


		header('Location: contacts.php');
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="contacts.css">
	<title>Edit Contact</title>
</head>
<body>
	<h1>Edit Contact</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']).'?id='.$id; ?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
		<input type="submit" value="Save Contact">
	</form>
</body>
</html>
