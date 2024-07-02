<?php 
session_start();
include_once __DIR__ . "/users.php";




if (isset ($_POST["username"]) && isset ($_POST["password"])){
    $myUsername = $_POST["username"];
    $myPassword = $_POST["password"];
    
    foreach ($users as $user){
        
        if ($user["username"] === $myUsername){

            if ($user["password"] === $myPassword){

                $_SESSION["username"] = $myUsername;
                $_SESSION["password"] = $myPassword;
                header('location: ./index.php');
                exit;
            }
        }
    }

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
    <h1>LOGIN</h1>
    <form  method="POST">
        <label for="username">username</label>
        <input type="text" name="usernane" id="username">
        <label for="password">password</label>
        <input type="text" name="password" id="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>