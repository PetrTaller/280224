<?php
session_start();

if(isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
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
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
    <title>Secret Website</title>
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
        <div><h1>Register</h1></div>
        <br>
        <form action="register.php" method="post" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
            <label for="username">Username:</label>
            <input type="text" name="username" required id="username">
            <br>
            <label for="username">E-mail:</label>
            <input type="email" name="email" required id="email">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required id="password">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required id="password">
            <br>
            <input type="submit" value="Register">
        </form>

        <br><br><br><br><br><br><br> 
        <form action="index.php" method="post">
        <button style="border:none; background-color:white; color:blue;" >Back to Login</button>
        </form> 
        <br><br>
        <footer>Petr Taller 2024 ©</footer>
    <script>
    </script>
    </body>
    </html>