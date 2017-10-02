<?php

session_start();

// si on est encore connecté, on est redirigé vers admin/
if(isset($_SESSION['clef_de_session'])&&$_SESSION['clef_de_session']==session_id()){
    header("Location: admin/");
}

/* 
 * FRONT CONTROLER
 */

require_once 'connect.php';
require_once 'fonctions.php';


// routage


// le menu comprendra : Accueil - <a href='admin/'>connexion</a>

// si accueil
if(empty($_GET)&&empty($_POST)){

    require_once 'page/accueil.php';

// si on est sur le détail de l'article, idem que accueil sauf texte complet
    
}
 elseif (isset($_GET['accueil'])) {
    require 'page/accueil.php';
}
elseif(isset($_GET['presentation'])){
    require 'page/presentation.php';
}
elseif(isset($_GET['autretech'])){
    require 'page/autre_ecole.php';
}
elseif(isset($_GET['article'])){
    require 'page/article.php';
}
elseif(isset($_GET['prive'])){
    require 'page/prive.php';
}
elseif(isset($_GET['contact'])){
    require 'page/contact.php';
}
elseif(isset($_GET['formation'])){
    require 'page/formation.php';
}elseif(ctype_digit($_GET['articleseul'])){
    $id = (int) $_GET['articleseul'];
    require_once 'page/articleseul.php';
}