<?php
include 'db.php';

if(isset($_POST['register'])) {

    $username = $_POST['username'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(username,password)
            VALUES('$username','$password')";

    $conn->query($sql);

    echo "Registration Successful!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Register</h1>

<form method="POST">

    Username:
    <input type="text"
           name="username"
           required>

    <br><br>

    Password:
    <input type="password"
           name="password"
           required>

    <br><br>

    <button type="submit"
            name="register">
        Register
    </button>

</form>

<br>

<a href="login.php">
    Login Here
</a>

</body>
</html>