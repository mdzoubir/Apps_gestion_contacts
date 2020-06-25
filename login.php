<?php
session_start();
include('connect.php');
if(isset($_POST['login'])){
    $user =htmlspecialchars(strtolower(trim($_POST['user'])));
    $pass = $_POST['pass'];
    $requit= "SELECT * FROM login WHERE Username='$user' AND password='$pass' "; //verefication de user and pass
    $result= mysqli_query($conn, $requit); //connection de requite sql ave database
    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["Username"];
        header("location:accueil.php");
        
        }
    else{
        echo 'no';
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
                    <a href="login.php">Login</a>
                </h3>
            </ul>
        </header>
        <h1 id="authe">Authenticate</h1>
        <form action="" method="POST" class="login">
            <label class="lab">Username</label>
            <input type="text" placeholder="Username" name="user" class="put" require pattern="[A-Za-z0-9]+" title="The username should contain only numbers and letters">
            <label class="lab">Password</label>
            <input type="password" placeholder="password" name="pass"  class="put" require>
            <input type="submit" name="login" value="Login">
        </form>
        <p class="No">No account? <a href="#">Sign up</a> here.</p>
    </div>
</body>
</html>