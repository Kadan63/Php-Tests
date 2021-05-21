
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contactez-nous </h1>
    <?php if(!empty($_GET['message'])) echo $_GET['message']; ?>
    <p>Pour plus d'informations sur un produit ou notre société veuillez saisir le formulaire suivant </p>
    <form action="traitement.php" method="post">
        <p>
            <label for="firstname">Prénom*</label>
            <input type="text" name="firstname"/>
        </p>
        <p>
            <label for="name">Nom</label>
            <input type="text" name="name"/>
        </p>
        <p>
            <label for="email">Email*</label>
            <input type="email" name="email"/>
        </p>
        
        <p>
            <label for="message">Votre message</label>
            <textarea name="message"></textarea>
        </p>
        <p>
            <input type="submit" name="send" value="Envoyer"/>
        </p>
    </form>
</body>
</html>

