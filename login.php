<?php 
require_once __DIR__ . "/users.php";

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="./index.php" method="GET">
        <label for="username">username</label>
        <input type="text" name="usernane" id="username">
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>