<?php



// on essaye de se connecter
try {
    $connect = new PDO('mysql:host=localhost;dbname=sylviane', "root", "");
// on récupère l'erreur au cas où    
} catch (PDOException $e) {
    // on affiche un message d'erreur
    echo "<h1>" . $e->getMessage() . "</h1>";
}
// affichage d'erreur sql, pour debuggage (dev)
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// pour charger toutes les bibliothèques installées via composer
require_once 'vendor/autoload.php';

// création du loader twig
$loader = new Twig_Loader_Filesystem('insert/v');
$twig = new Twig_Environment($loader/* , array(
          'cache' => 'cache',
          ) */);

    require_once 'c/ImagesController.php';


