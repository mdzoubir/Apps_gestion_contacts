<?php 


session_start();
include('conn.php');
if(isset($_POST['login'])){
    $user =htmlspecialchars(trim($_POST['user'])); //strtolower: tout les caractere en minisquile /htmlspecialchars : pour les tags   /trim: Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $pass = $_POST['pass'];
    $requit= "SELECT * FROM admin WHERE username='$user' AND password='$pass' "; //verefication de user and pass
    $result= mysqli_query($conn, $requit); //connection de requite sql ave database
    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION["name"]=$row["Username"];
        header("location:newpost.php");
        
        }
    else{
        $message_error = 'your usename or password is incorrect';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('navbar.php') ?>
    <div class="formlog">
        <h1 id="authe">Authenticate</h1>
        <form action="" method="POST">
            <label>Username</label>
            <input type="text" placeholder="Username" name="user"  require pattern="[a-z]{3,100}"  title="The username should contain only letters ">
            <label>Password</label>
            <input type="password" placeholder="password" name="pass" require>
            <p class="msgerr"> <?php if(isset($message_error)){ echo $message_error; }?></p>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>