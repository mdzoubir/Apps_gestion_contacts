<?php

// include('conn.php');
$bdb=new PDO('mysql:host=localhost;dbname=blog-informatif', 'root','root');

// preparation de la requéte
$podStat = $bdb->prepare('SELECT * FROM post WHERE id=:num');

// liason du paramaitre nomé
$podStat->bindValue(':num', $_GET['numPost'], PDO::PARAM_INT);


$executeIsOk=$podStat->execute();


//le resulta

$contact = $podStat->fetch();
// var_dump($contact);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include('navbar.php'); ?>
    <form action="mod.php" method="POST" class="pubpost">
        <input type="hidden" name="numPost" value="<?= $contact['id'];?>">
            <label for="">title</label >
            <input type="text" placeholder="title..." required name="pubTitle" value="<?= $contact['titre'];?>">
            <label for="">Text</label>
            <textarea type="text" placeholder="text..." required name="pubText" ><?= $contact['contenu']; ?></textarea>
            <img src="avatar\<?=$contact['img']; ?>" alt="" style="margin-top:20px;">
            <input type="file" name="pubimg" value="avatar\<?=$contact['img']; ?>">
            <input type="submit" name="pubPost" value="Edit">
        </form>
</body>
</html>