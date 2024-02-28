<?php
session_start();

if(isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $users = json_decode(file_get_contents("users.json"), true);

    if (isset($users[$username])) {
        $_SESSION["message"] = "Username already exists.";
        header("Location: register_index.php"); 
        exit();
    }

    $users[$username] = [
        "username" => $username,
        "email" => $email,
        "password" => $password
    ];
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents("users.json", $json_data);

    $_SESSION["message"] = "Registration successful. You can now log in.";
    header("Location: register_index.php"); 
    exit();
}
?>