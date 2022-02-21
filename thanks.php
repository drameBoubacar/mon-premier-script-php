<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Merci <?php echo $_POST['nom']; ?> <?php echo $_POST['prenom'];  ?><br>
        de nous avoir contacté a propos de "<?php echo $_POST['sujet']; ?>". <br>
        Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['mail']; ?> <br>
        ou par téléphone au <?php echo $_POST['phone']; ?> dans les plus bref délais pour traiter votre demande : <br>
        <?php echo $_POST['message']; ?>
    </p>
</body>
</html>