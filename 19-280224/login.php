<?php
session_start();

if(isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("users.json"), true);
    if (isset($users[$username]) && $users[$username]["password"] === $password) {
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit();
    } else {
        $_SESSION["message"] = "User not found"; 
        header("Location: index.php");
    }
}
?>