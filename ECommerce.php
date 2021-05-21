<?php $categories = array (
    array('Nom' => 'Chats', 'Description' => 'Lorem Ipsum', 'Image' => 'https://cdn-s-www.ledauphine.com/images/A2B51F63-FA5C-463B-B27E-3FDCDBDA7CFD/NW_raw/grumpy-cat-avait-7-ans-photo-twitter-1558093797.jpg', 'Id' => 0),
    array('Nom' => 'Chiens', 'Description' => 'Lorem Ipsum', 'Image' => 'https://pbs.twimg.com/profile_images/1351720980972933122/I3MnYUdm_400x400.jpg', 'Id' => 1),
    array('Nom' => 'Oiseaux', 'Description' => 'Lorem Ipsum', 'Image' => 'https://www.birdwatchersdigest.com/bwdsite/wp-content/uploads/2020/03/prairie-warbler-male.jpg', 'Id' => 2),
    array('Nom' => 'Reptiles', 'Description' => 'Lorem Ipsum', 'Image' => 'https://img.poki.com/cdn-cgi/image/quality=78,width=314,height=314,fit=cover,g=0.5x0.5,f=auto/a5f0d32fb017d3b1747569999447666f.png', 'Id' => 3),
    array('Nom' => 'Rongeurs', 'Description' => 'Lorem Ipsum', 'Image' => 'https://t1.ea.ltmcdn.com/fr/images/5/2/5/img_comment_prendre_soin_d_un_capybara_525_orig.jpg', 'Id' => 4)
);
$tva = 2.1/100;
    $produits = array (
        array('Designation' => 'croquettes', 'prixHT' => 33.5, 'Description' => 'Lorem Ipsum', 'TauxTva' => $tva, 'Image' => 'https://www.platetrecette.fr/wp-content/uploads/2017/04/croquette-chat-chien.jpg', 'Categorie' => ''),
        array('Designation' => 'jouet', 'prixHT' => 12.3, 'Description' => 'Lorem Ipsum', 'TauxTva' => $tva, 'Image' => 'http://www.vivelelevage.com/upload/referentiel/24817/998.0502.jpg', 'Categorie' => ''),
        array('Designation' => 'litiere', 'prixHT' => 5.6, 'Description' => 'Lorem Ipsum', 'TauxTva' => $tva, 'Image' => 'https://www.wanimo.com/images/litiere_chat_maison_de_toilette/B/6P/B6PID01/700x700/05/l-igloo-pidan-studio.jpg', 'Categorie' => ''),
        array('Designation' => 'coucouche panier', 'prixHT' => 12.3, 'Description' => 'Lorem Ipsum', 'TauxTva' => $tva, 'Image' => 'https://livraison.gifi.fr/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/d/e/decaec7534136923618bd21dcef6a272-none_38a4e4c408a7e395a2166ee595d06fc4_38a4e4c.JPEG', 'Categorie' => '')
    );
    var_dump($produits);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo $categories[0]['Nom']; ?>

    <?php foreach ($categories as $key => $uneCategorie) :
        ?>
        <div>
        <h2>Catégorie : <?php echo $uneCategorie['Nom']; ?></h2>
        <p>Description : <?php echo $uneCategorie['Description']; ?></p>
        <img src='<?php echo $uneCategorie['Image'];?>'>
        </div>
        <?php
        endforeach; ?>

<?php foreach ($produits as $key => $unProduit) :
        ?>
        <div>
        <h2>Catégorie : <?php echo ucfirst($unProduit['Designation']); ?></h2>
        <p>Description : <?php echo $unProduit['Description']; ?></p>
        <p>Prix TTC : <?php echo round($unProduit['prixHT']*($unProduit['TauxTva']+1), 2);?></p>
        <img src='<?php echo $unProduit['Image'];?>' alt='<?php echo $unProduit['Designation'];?>'>
        </div>
        <?php
        endforeach; ?>

</body>
</html>