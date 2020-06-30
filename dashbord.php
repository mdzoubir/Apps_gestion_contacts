<?php include('conn.php');


if(isset($_POST['pubPost'])){
    if(!empty($_POST['pubTitle']) AND !empty($_POST['pubText']) AND !empty($_POST['pubimg'])){
        $pubtitle = htmlspecialchars($_POST['pubTitle']);
        $pubtext = htmlspecialchars($_POST['pubText']);
        $pubimg = $_POST['pubimg'];

        $sql = "INSERT INTO post (titre, contenu, date_pub, img) VALUES ('$pubtitle', '$pubtext', NOW(), '$pubimg')";
        mysqli_query($conn, $sql);
        $postbein = 'the post was well created';

    }
    else{
        $message = 'Veuillez compléter tous les champs';
    }
}
?>





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        <h1 class="logo"><a href="dashbord.php"> Blog</a></h1>
        <ul>
            <h3><a href="#">Profil</a> </h3>
            <h3><a href="home.php">sign out</a> </h3>
            <!-- <h3><a href="login.php">Login</a> </h3> -->
        </ul>
        
    </div>
    <div class="dashb">
        <div class="title">
            <h2 id="pre">Creet POST</h2>
            <h2> Edit-Delete POST</h2>
        </div>
        <div id="cree">
            <form action="" method="POST" class="pubpost">
                <label for="">title</label >
                <input type="text" placeholder="title..." required name="pubTitle">
                <label for="">Text</label>
                <textarea type="text" placeholder="text..." required name="pubText"></textarea>
                <input type="file" name="pubimg">
                <input type="submit" name="pubPost" value="Post">
                <?php if(isset($postbein)){ echo $postbein;}?>
            </form>
            
        </div>
    </div>
    











    <script src="app.js"></script>
</body>
</html>