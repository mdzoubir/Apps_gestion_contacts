<?php
include('connect.php')






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body>
    <div class="loginup">
        <header>
            <h2>Contacts list</h2>
            <ul class="log">
                <h3>
                    <a href="login.php">Login</a>
                </h3>
            </ul>
        </header>
        <h1 id="authe">Authenticate</h1>
        <form action="connect.php" method="POST" class="login">
            <label class="lab">Username</label>
            <input type="text" placeholder="Username" name="user" class="put">
            <label class="lab">Password</label>
            <input type="password" placeholder="password" name="pass"  class="put">
            <input type="submit" name="login" value="Login">
        </form>
        <p class="No">No account? <a href="#">Sign up</a> here.</p>
    </div>
</body>
</html>