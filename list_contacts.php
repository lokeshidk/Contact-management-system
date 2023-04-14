<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');


$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['phone']."</td>";
	echo "<td><a href='edit_contact.php?id=".$row['id']."'>Edit</a> | <a href='delete_contact.php?id=".$row['id']."'>Delete</a></td>";
	echo "</tr>";
}
?>
