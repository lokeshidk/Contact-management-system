<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="contacts.css">
	<link rel="stylesheet" href="./style.css">
<?php 
session_start();
if(!isset($_SESSION['logged']) && $_SESSION['logged'] != true){
    header("Location: login.php");
}?>
	<title>Contact Management System</title>
</head>
<body>
	<h1>Contact Management System</h1>
	<h2>Add Contact</h2>
	<form method="post" action="add_contact.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone"><br><br>
		<input type="submit" value="Add Contact">
	</form>
	<hr>
	<h2>Contacts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php include 'list_contacts.php'; ?>
		</tbody>
	</table>
</body>
</html>
