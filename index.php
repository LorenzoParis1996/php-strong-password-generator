<?php 
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
    <h1>Welcome</h1>
    <p><?php echo $_SESSION["username"]; ?></p>
    

    <h3>Log Out</h3>
    <form action="./logout.php">
        <button type="submit">logout</button>
    </form>
</body>
</html>