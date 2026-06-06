<?php
session_start();

include 'db.php';

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query(
        "SELECT * FROM users
         WHERE username='$username'"
    );

    if($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if(
            password_verify(
                $password,
                $user['password']
            )
        ) {

            $_SESSION['user'] = $username;

            header("Location: index.php");
            exit();
        }
    }

    echo "Invalid Login!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

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
            name="login">
        Login
    </button>

</form>

<br>

<a href="register.php">
    Register Here
</a>

</body>
</html>