<?php 
include('conn.php');

// -----------------new pst
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
<!-- ----------------------------edit post -->





















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
        <h1 class="logo"><a href="home.php"> Blog</a></h1>
        <ul>
            <h3><a href="#">Profil</a> </h3>
            <h3><a href="home.php">sign out</a> </h3>
            <!-- <h3><a href="login.php">Login</a> </h3> -->
        </ul>
        
    </div>
    <div class="dashb">
        
        <div class="title">
            <h2 id="pre" class="head">Creet POST</h2>
            <h2 id="edit" class="head"> Edit POST</h2>
            <h2 id="delete" class="head"> Delete POST</h2>
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
        <div class="editpost" id="editpost">
            <table style="width:100%">
                <tr>
                    <th>title</th>
                    <th>Contenu</th> 
                    <th>images</th>
                    <th>Date de pub</th>
                    <th>Edit post</th>
                </tr>
                <?php 
                $result = $conn->query('SELECT * FROM post');
                while($data=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($data['titre']);?></td>
                    <td><?php echo htmlspecialchars($data['contenu']);?></td>
                    <td><img src = "avatar/<?php echo $data['img']; ?>" alt=""></td>
                    <td><?php echo ($data['date_pub']);?></td>
                    <td><a href=""> Edit </a></td>
                </tr>
                <?php
                }
                $result->close();
                ?>
            </table>
        </div>
        <div class="deletepost" id="deletepost">
            <table style="width:100%">
                <tr>
                    <th>title</th>
                    <th>Contenu</th> 
                    <th>images</th>
                    <th>Date de pub</th>
                    <th>Delete post</th>
                </tr>
                <?php 
                $result = $conn->query('SELECT * FROM post');
                while($data=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($data['titre']);?></td>
                    <td><?php echo htmlspecialchars($data['contenu']);?></td>
                    <td><img src = "avatar/<?php echo $data['img']; ?>" alt=""></td>
                    <td><?php echo ($data['date_pub']);?></td>
                    <td><a href="supprimer.php?numPost=<?= $data['id']?>"> Delete </a></td>
                </tr>
                <?php
                }
                $result->close();
                ?>
            </table>
        </div>
    </div>
    











    <script src="app.js"></script>
</body>
</html>