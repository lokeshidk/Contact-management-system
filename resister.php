<html>
<head>
    <link rel="stylesheet" type ="text/css" href="register.css">
</head>
<body>
    <form method="post" action="insert_user.php" enctype="multipart/form-data">
        <label for="person-name">Name:</label>
        <input type="text" name="name" id="person-name"><br>
        <label>Email:</label>
        <input type="email" name="email"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit">
        <a href="iglogin.php">Have account already?</a>
    </form>
</body>
</html>
