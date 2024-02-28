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
echo "<pre>";
require_once "./User.php";
require_once "./DBC.php";

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo"udaje mas prazdne";
    exit();
}

/*$user = new User(1,$_POST["username"],$_POST["password"]);
echo $user;*/

$connection = DBC::getConnection();
var_dump($connection);

?>