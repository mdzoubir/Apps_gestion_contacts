<?php
include('conn.php');
if(isset($_POST['pubTitle'], $_POST['pubText'])){
    if(!empty($_POST['pubTitle']) AND !empty($_POST['pubText'])){
            $pubtitle = htmlspecialchars($_POST['pubTitle']);
            $pubtext = htmlspecialchars($_POST['pubText']);
    }else{
        $erreur = 'Veuillez remplir tous les champs';
    }

}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1 class="logo"><a href="dashbord.php"> Blog</a></h1>
        <ul>
            <h3><a href="#">Home</a> </h3>
            <h3><a href="#">Contact</a> </h3>
            <h3><a href="login.php">Login</a> </h3>
            <h3><a href="Dashbord.php">Dashbord</a></h3>
        </ul>
    </div>
        <form action="" method="POST" class="pubpost">
            <label for="">title</label >
            <input type="text" placeholder="title..." required name="pubTitle">
            <label for="">Text</label>
            <textarea type="text" placeholder="text..." required name="pubText"></textarea>
            <input type="submit" name="pubPost" value="Post">
        </form>
        <br>
        <?php if(isset($erreur)){
            echo $erreur;
        }
        ?>
</body>
</html>