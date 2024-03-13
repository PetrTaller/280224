<?php
require_once "./DBC.php";

if(isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if(DBC::getUser($username)) {
            $_SESSION["message"] = "User already exists.";
            header("Location: registration.php"); 
            exit();
    } else {
        if(DBC::insertUser($username, $password)) {
            $_SESSION["message"] = "Registration successful. You can now log in.";
            header("Location: index.php"); 
            exit();
        } else {
            $_SESSION["message"] = "Registration unsuccessful. Try again.";
            header("Location: registration.php"); 
            exit();
        }
    }
}

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    echo "<script>alert('$message');</script>";
    unset($_SESSION["message"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
body {
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
        color: rgb(0, 0, 0);
        text-align:center;
    }
h1 {
        text-align: center;
        font-size: 40px;
    }
    footer {
    color: #838383;
    font-size: 15px;
    text-align: center;
    font-family: lekton, monospace;
}
    </style>
</head>
<body>
    <br>
    <h1>Registration</h1>
    <br>
    <form method="post" action="registration.php " style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="register" value="Register"><br>
        <br><br><br><br> <br><br>
        <br><br><br><br><br>
        </form>
        <form action="index.php" method="post">
        <button style="border:none; background-color:white; color:blue;" >Back to Login</button>
        </form>
    </form>
    <br><br>
        <footer>Petr Taller 2024 ©</footer>
</body>
</html>