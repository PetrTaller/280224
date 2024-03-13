<?php
/*session_start();

if(isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
}*/
/*echo "<pre>";
require_once "./User.php";
require_once "./DBC.php";

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo"udaje mas prazdne";
    exit();
}

/*$user = new User(1,$_POST["username"],$_POST["password"]);
echo $user;

$connection = DBC::getConnection();
var_dump($connection);

?>*/


session_start();
require_once "./DBC.php";

if(isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = DBC::getUser($username);

    if($user && password_verify($password,$user["password"])) {
        $_SESSION["username"] = $username;
        $_SESSION["message"] = "Login successful.";
        header("Location: home.php"); 
        exit();
    } else {
        $_SESSION["message"] = "Unknown login credentials or password.";
        header("Location: index.php"); 
        exit();
    }
}

if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    echo "<script>alert('$message');</script>";
    unset($_SESSION["message"]);
}
?>