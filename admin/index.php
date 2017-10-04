<?php

/* 
 * Contrôleur frontal de l'admin !!! aux chemins
 */

// Lancement de session
session_start();

// dépendances
require_once '../connect.php';
require_once '../fonctions.php';

// si on est pas connecté
if(!isset($_SESSION['clef_de_session'])){
    require_once 'connexion.php';
}else{
    // si la clef est toujours valide
    if($_SESSION['clef_de_session']== session_id()){
        // si on effectue une action
        if(isset($_GET['action'])){
            // switch du type d'action
            switch($_GET['action']){
                // on veut se déconnecter
                case "deco":
                    header("Location: disconnect.php");
                    break;
                // on veut insérer
                case "insert":
                    require_once 'insert/insert_article.php';
                    break;
                case "insertTemoign":
                    require_once 'insert/insert_temoign.php';
                    break;
<<<<<<< HEAD
                case "insertImage":
                    require_once 'insert/index.php';
                    break;
=======
>>>>>>> 01dd880fc444a27315febbf82de4598b1862c4f0
                // on veut supprimer
                case "delete":
                    require_once 'delete/delete.php';
                    break;
                // on veut modifier
                case "update":
                    require_once 'update/update_article.php';
                    break;
                case "audio":
                    require_once 'page/audio.php';
                    break;
                case "article":
                    require_once 'page/article.php';
                    break;
                case "calendrier":
                    require_once 'page/evenement.php';
                    break;
                case "temoignage":
                    require_once 'page/temoignage.php';
                    break;
                case "utilisateur":
                    require_once 'page/utilisateur.php';
                    break;
                case "carousel":
                    require_once 'page/carousel.php';
                    break;
                case "formation":
                    require_once 'page/formation.php';
                    break;                    
                case "newsletter":
                    require_once 'page/newsletter.php';
                    break;       
                default :
                    header("Location: ./");
            }
            
        }else{
            // appel de l'accueil
             if(isset($_GET[$lulu])&& ctype_digit($_GET[$lulu])){
        $pg= (int) $_GET[$lulu];
    }else{
        $pg=1;
    }
            require_once 'page/accueil_admin.php';
        }
    }else{
        header("Location: disconnect.php");
    }
}