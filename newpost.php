<?php
include('conn.php');


if(isset($_POST['pubPost'])){
    if(!empty($_POST['pubTitle']) AND !empty($_POST['pubText']) AND !empty($_POST['pubimg'])){
        $pubtitle = htmlspecialchars($_POST['pubTitle']);
        $pubtext = htmlspecialchars($_POST['pubText']);
        $pubimg = $_POST['pubimg'];

        $sql = "INSERT INTO post (titre, contenu, date_pub, img) VALUES ('$pubtitle', '$pubtext', NOW(), '$pubimg')";
        mysqli_query($conn, $sql);

        header("location:home.php");

    }
    // else{
    //     $message = 'Veuillez compléter tous les champs';
    // }
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
            <input type="file" name="pubimg">
            <input type="submit" name="pubPost" value="Post">
        </form>
        <br>
</body>
</html>