<?php 
if(isset($_POST['envey'])){
    $nom = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    if((!empty($nom)) AND (!empty($phone)) AND (!empty($email))  AND (!empty($message))){
        $destinataire="simozoubir012@gmail.com";
        $sujet="Formulaire de contact";
        $msg="une nouvelle question est arrivée \n
        Nom : $nom \n
        Phone : $phone \n
        Email :  $email \n
        Message : $message";
        $entete =  'MIME-Version: 1.0' . "\r\n"; 
        $entete .= "From : $nom <$email>" . "\r\n";
        $entete .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        mail($destinataire, $sujet, $msg, $entete);
    }else{
        $erreur= 'tous les champs doivent étre complétés !';
    }
}







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('navbar.php');?>
    <div class="contact">
        <form action="" method="POST">
            <label for="">Name</label>
            <input type="text" placeholder="Enter name"name="name">
            <label for="">Phone</label>
            <input type="text" placeholder="Phone" name="phone">
            <label for="">Email</label>
            <input type="email" placeholder="Email" name="email">
            <label for="">Message</label>
            <textarea name="msg" id="" cols="30" rows="10" placeholder="message"></textarea>
            <input type="submit" name="envey" value="Envey">
        </form>
        <?php if(isset($erreur)){ echo $erreur;} ?>
    </div>
</body>
</html>