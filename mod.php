<?php 
// include('conn.php');
$bdb=new PDO('mysql:host=localhost;dbname=blog-informatif', 'root','root');
$pdoStat = $bdb->prepare('UPDATE post set titre=:titre, contenu=:contenu WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numPost'], PDO::PARAM_INT);
$pdoStat->bindValue(':titre', $_POST['pubTitle'], PDO::PARAM_STR);
$pdoStat->bindValue(':contenu', $_POST['pubText'], PDO::PARAM_STR);
// $podStat->bindValue(':img', $_POST['pubimg'], PDO::PARAM_STR);




$executeIsOk=$pdoStat->execute();

if($executeIsOk){
    $message='le post a été modifier';
}else{
    $message= 'echec de la mise à jour de post';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit post</title>
</head>
<body>
    <h1>Resultat de la modification</h1>
    <h3><?php echo $message; ?></h3>
</body>
</html>