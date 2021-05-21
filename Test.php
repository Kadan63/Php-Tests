<?php
        $firstnameUser = ucfirst("Andréa");
        $lastnameUser = strtoupper("Nicoulaud");
        $jobUser = trim(strtolower(' Développeur WEB'));
        $birthYear = 1993;
        $actualYear = date('Y');
        $age = $actualYear-$birthYear;
        $salaireHoraire = 9.75;
        $heures = 35;
        $salaireHebdo = $salaireHoraire*$heures;


    $fullTime = true;
    $manager = false;
    if ($fullTime){
        $contrat = 'Temps plein';
    }else{
        $contrat = "Temps partiel";
    }
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $firstnameUser; ?> <?php echo $lastnameUser; ?></h1>

<h3>Âge : <?php echo $age; ?> ans</h3>

<h2><?php echo $jobUser;?></h2>
<p><?php echo 'Ça réveille Bernadette, Bernadette la vieille chouette
Qui bondit, une belette, un lapin c\'est pas normal';?></p>

<p>Salaire hebdomadaire : <?php echo $salaireHebdo;?>€</p>
<p>Salaire hebdomadaire arrondi inférieur : <?php echo floor($salaireHebdo);?>€</p>
<p>Salaire hebdomadaire arrondi supérieur : <?php echo ceil($salaireHebdo);?>€</p>
<p>Salaire hebdomadaire arrondi : <?php echo round($salaireHebdo, 1);?>€</p>

<p>Plein temps ? <?php echo $contrat;?></p>

<?php $languesParlees = array("Français", "Anglais", "Espagnol", "Russe");
array_push($languesParlees, 'Allemand', 'Mandarin');
 var_dump($languesParlees); ?>

 <?php $langueParlee = [
     ['Nom' => 'Anglais', 'Niveau' => 'Intermédiaire'],
     ['Nom' => 'Espagnol', 'Niveau' => 'Intermédiaire'],
     ['Nom' => 'Mandarin', 'Niveau' => 'Mytho']
    ];
var_dump($langueParlee); ?>


<?php
    $films=array(
        array('Title'=>"Blade Runner",'Année de Sortie'=>"1982",'Synopsis'=>"Like Tears in Rain..."),
        array('Title'=>"Les Affranchis",'Année de Sortie'=>"1990",'Synopsis'=>"Funny how ?"),
        array('Title'=>"Heat",'Année de Sortie'=>"1995",'Synopsis'=>"BANG"),
        array('Title'=>"Les Dents de la Mer",'Année de Sortie'=>"1975",'Synopsis'=>"We're gonna need a bigger boat"),
        array('Title'=>"The Thing",'Année de Sortie'=>"1982",'Synopsis'=>"There's a storm hitting us in six hours, and we're gonna find out who's who..."),
       
    );
    $catégories = array("Action", "Aventure", "Science-Fiction", "Horreur", "Policier");
    //$realisateurs= array("Ridley Scott", "Martin Scorcese", "Michael Mann", "Steven Spielberg", "John Carpenter");

    $films[0]["Realisateur"]=array('Realisateur'=>"Ridley Scott");
    $films[1]["Realisateur"]=array('Realisateur'=>"Martin Scorcese");
    $films[2]["Realisateur"]=array('Realisateur'=>"Michael Mann");
    $films[3]["Realisateur"]=array('Realisateur'=>"Steven Spielberg");
    $films[4]["Realisateur"]=array('Realisateur'=>"John Carpenter");

    $films[0]["Categorie"]=array('Genre'=>"Science-Fiction");
    $films[1]["Categorie"]=array('Genre'=>"Biopic");
    $films[2]["Categorie"]=array('Genre'=>"Policier");
    $films[3]["Categorie"]=array('Genre'=>"Aventure");
    $films[4]["Categorie"]=array('Genre'=>"Horreur");

    var_dump($films)
 
    
?>


</body>
</html>