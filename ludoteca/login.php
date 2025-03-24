<?php
session_start();
require_once '../header.php';

if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user is registered
    $result = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")->fetch_assoc();

    if ($result) {
        $_SESSION['user'] = $result["id"];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        /* Add CSS styles for the login form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .login {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        .login h2 {
            color: #333;
        }
        .login input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
    </style>
    <script>
        // Add JavaScript for form validation
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;
            if (username == "" || password == "") {
                alert("Username and password must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form name="loginForm" action="" method="post" onsubmit="return validateForm()">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <p>Non sei registrato? <a href="register.php">Registrati qui</a></p>
    </div>
</body>
</html>
