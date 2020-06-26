<?php
include("connect.php");
if(isset($_POST['login'])){
    $user=htmlspecialchars(strtolower(trim($_POST['user'])));
    $pass=trim($_POST['pass']);
    $requit= "INSERT INTO login(Username, password)VALUE('$user', '$pass')";
    if(mysqli_query($conn, $requit)){
        echo 'hi';
    }else{
        echo 'hiiiiiiiiiiiii';
    }
}





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
                    <a href="login.php">login</a>
                </h3>
            </ul>
        </header>
        <h1 id="authe">Authenticate</h1>
        <form action="" method="POST" class="login">
            <label class="lab">Username</label>
            <input type="text" placeholder="Username" name="user" class="put" require pattern="[A-Za-z0-9]+" title="The username should contain only numbers and letters">
            <label class="lab">Password</label>
            <input type="password" placeholder="password" name="pass"  class="put" require>
            <label class="lab">Password Verify</label>
            <input type="password" placeholder="password Verify" name="passV"  class="put" require>
            <input type="submit" name="login" value="Login">
        </form>
        <p class="No">Already have an account? <a href="login.php">login</a> here.</p>
    </div>
</body>
</html>