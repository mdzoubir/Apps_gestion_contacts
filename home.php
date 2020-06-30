<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include('navbar.php');
    $result=$conn->query('SELECT * FROM post');
    while($data=$result->fetch_assoc())
{
?>
     <div class="viewpost">
         <img src = "avatar/<?php echo $data['img']; ?>" alt="">
        <h5>titre:<?php echo htmlspecialchars($data['titre']);?></h5>
        <p>la date de publication:<?php echo ($data['date_pub']);?></p>
        <p>contenu:<?php echo htmlspecialchars($data['contenu']);?></p>
                
     </div>

<?php
}
$result->close();
?>
</div>
    
</body>
</html>