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
                    require_once 'insert.php';
                    break;
                // on veut supprimer
                case "delete":
                    require_once 'delete.php';
                    break;
                // on veut modifier
                case "update":
                    require_once 'update.php';
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
            require_once 'accueil_admin.php';
        }
    }else{
        header("Location: disconnect.php");
    }
}