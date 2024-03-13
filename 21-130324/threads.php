<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
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
    text-align:center;
        margin: 0;
        padding: 0;
        height: 100%;
        overflow: hidden;
        color: rgb(0, 0, 0);
    }
h1 {
    color: #0f0f0f;
    font-size: 60px;
    text-align: center;
    font-weight: normal;
    text-transform: uppercase;
    font-family: lekton, monospace;
    -ms-flex-item-align: center;
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
        <div>
        <h1>WRITE A THREAD <?php 
        echo "".$_SESSION["username"];?>!</h1>
        </div>
        <br>

        <form action="writeThread.php" method="post" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
            <label for="Title">Title:</label>
            <input type="text" name="title" required id="title">
            <br>
            <label for="text">Text:</label>
            <input type="text" name="text" required id="text">
            <br>
            <input type="submit" value="Create">

        <br><br><br><br><br><br>

        <form action="home.php" method="post">
        <button style="border:none; background-color:white; color:blue;" >Home</button>
        </form>

        <br> 
        <form action="logout.php" method="post">
        <button style="border:none;"><?php 
        echo "Sign out";?></button>
        </form>
        <br><br>
        <footer>Petr Taller 2024 ©</footer>
    <script>
    </script>
    </body>
    </html>