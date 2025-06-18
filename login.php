<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["userEmail"])){
           $email = $_POST["userEmail"];

           echo $email;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label for="userEmail">
            <p>Endereço de e-mail</p>
        </label>
        <input type="email" name="userEmail" id="userEmail" placeholder="email@gmail.com">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>