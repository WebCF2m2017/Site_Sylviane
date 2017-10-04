<?php

// chargement des dépendances
require_once 'insert/m/UploadImg.php';
require_once 'insert/m/Images.php';
require_once 'insert/m/ImagesManager.php';


// création des manager's
$manImages = new ImagesManager($connect);




    // var_dump(ImagesManager::AfficheDossier("./m/"));
    $ToutesImg = $manImages->AfficheTous();
    //var_dump($ToutesImg);
    echo $twig->render("accueil.html.twig",["imgt"=>$ToutesImg]);
