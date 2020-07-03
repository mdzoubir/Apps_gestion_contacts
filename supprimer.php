<?php 

// include('conn.php');
$bdb=new PDO('mysql:host=localhost;dbname=blog-informatif', 'root','root');

// preparation de la requéte
$podStat = $bdb->prepare('DELETE FROM post WHERE id=:num LIMIT 1');

// liason du paramaitre nomé
$podStat->bindValue(':num', $_GET['numPost'], PDO::PARAM_INT);


$executeIsOk=$podStat->execute();
if($executeIsOk){
    echo 'le post a été supprimer';
    if(isset($reteur)){
        header('location:dashbord.php');
    }
}
?>