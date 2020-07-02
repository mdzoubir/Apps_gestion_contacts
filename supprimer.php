<?php 
include('conn.php');

// preparation de la requéte
$podStat = $conn->prepare('DELETE FROM post WHERE id=:num LIMIT 1');

// liasion du paramaitre nomé
$podStat->bindValue(':num', $_GET['numPost'], PDO::PARAM_INT);


$podStat->execute()







?>