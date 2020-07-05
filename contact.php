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
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= "From: $nom <$email>" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
        mail($destinataire, $sujet, $msg, $headers);
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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <?php include('navbar.php');?>
    <div class="contact">
        <form action="" method="POST">
            <div class="nameCon">
                <label for="" class="frlabel">Name</label>
                <input type="text" placeholder="Enter name"name="name">
                <label for="" class="seclabel">Phone</label>
                <input type="text" placeholder="Phone" name="phone">
            </div>
            <label for="">Email</label>
            <input type="email" placeholder="Email" name="email">
            <label for="">Message</label>
            <textarea name="msg" id="" cols="30" rows="10" placeholder="message"></textarea>
            <input type="submit" name="envey" value="Envey">
        </form>
        
    </div>
    <?php if(isset($erreur)){ echo $erreur;} ?>
</body>
</html>