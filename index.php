<?php 

require_once __DIR__ . "/users.php";

session_start();

if(isset($_GET["username"]) && isset($_GET["password"])) {
    $_SESSION["username"] = $_GET["username"];
    $_SESSION["password"] = $_GET["password"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <p><?php echo $_SESSION["username"] ?></p>
    <p><?php echo $_SESSION["password"] ?></p>

    <h3>Log Out</h3>
    <form action="./logout.php">
        <button type="submit">logout</button>
    </form>
</body>
</html>