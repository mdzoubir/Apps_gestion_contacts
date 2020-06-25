<?php
include('connect.php');
if(isset($_POST['login'])){
    $user =htmlspecialchars(strtolower(trim($_POST['user']))); //strtolower: tout les caractere en minisquile /htmlspecialchars : pour les tags   /trim: Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $pass =htmlspecialchars(strtolower(trim(md5($_POST['pass'])))); //chifrée le mode de pass
    $requite = "INSERT INTO login(Username,password) VALUE('$user', '$pass')";
    if($_POST['passV']==$_POST['pass']){
        if(mysqli_query($conn, $requite)){
            echo 'hi';
            // header("location:accueil.php");
        }else{
            echo 'd3t';
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
            <input type="text" placeholder="Username" name="user" minlength="3" class="put" require pattern="[A-Za-z0-9]+" title="The username should contain only numbers and letters">
            <label class="lab">Password</label>
            <input type="password" placeholder="password" name="pass" minlength="6" class="put" require>
            <label class="lab">Password verify</label>
            <input type="password" placeholder="password verify" name="passV"  class="put" require>
            <input type="submit" name="login" value="Login">
        </form>
        <p class="No">Already have account? <a href="login.php">Login</a> here.</p>
    </div>
</body>
</html>