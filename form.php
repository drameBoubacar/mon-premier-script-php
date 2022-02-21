<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div>
            <label for="phone">Numéro</label>
            <input type="number" name="phone" id="phone">
        </div>
        <div>
            <label for="sujet">sujet</label>
            <select name="sujet" id="sujet" id="sujet">
                <option value="sujetA">sujetA</option>
                <option value="sujetB">sujetB</option>
            </select>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>