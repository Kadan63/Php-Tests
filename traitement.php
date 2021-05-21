<?php 
$email = $_POST['email'];
$message = ''; 
$firstname = ucfirst($_POST['firstname']);
$_POST['name'] = strtoupper($_POST['name']);

if (empty($_POST['send'])){
    $message = 'Va remplir ton formulaire omg';
    header('location:contact.php?message='.$message);
}else{
    if(empty($firstname)){
        $message.='<div>Les champs email et prénom sont obligatoires</div>';
}elseif(empty($email)){
            $message.= '<div>Ecris ton mail tu veux qu\'on te contacte comment sinon débilos ?</div>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
<?php if(!empty($message)){
echo $message;
}else {
    ?>
    <p>Bonjour <?php echo $_POST['firstname']; ?> <?php echo $_POST['name']; ?></p>
    <p>Votre demande a bien été prise en compte</p>
    <p>Une confirmation vous sera envoyée à l'adresse <?php echo $_POST['email']; ?></p>
    <?php }?>

</body>
</html>
