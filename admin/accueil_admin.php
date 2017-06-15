<?php
if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

/*$requete = mysqli_query($db, "SELECT COUNT(id) AS nb FROM article;");
$requete_assoc = mysqli_fetch_assoc($requete);
$nb_tot = $requete_assoc['nb'];
// calcul pour le premier argument du LIMIT
$limit = ($pg-1)*$par_page;

if($_SESSION['idrole']==1||$_SESSION['idrole']==2){
    $complement_sql= "";
}else{ // simple util
    $complement_sql= "WHERE au.id = ".$_SESSION['id'];
}
    // récupération des articles suivant les droits
$recup_art = mysqli_query($db,"SELECT a.id, a.letitre, SUBSTRING(a.letexte,1,300) AS letexte, a.ladate, a.auteur_id, au.lelogin FROM article a INNER JOIN auteur au ON au.id = a.auteur_id $complement_sql ORDER BY a.ladate DESC LIMIT $limit, $par_page;");
$pagination = maPagination($nb_tot, $pg,$lulu,$par_page);
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administration - Accueil</title>
        <script>
            function sup(id){
                var a = confirm("Voulez-vous supprimer l'id "+id+" ?");
                if(a){
                    document.location.href="?action=delete&id="+id;
                }
            }
        </script>
    </head>
    <body>
        <h1>Bonjour </h1>
        <!--<h2>Vous êtes connecté en tant que <?=$_SESSION['lerole']?></h2>-->
        <h3><a href="./">Accueil</a>
                <!--
           Si on est pas modérateur, ajoutez le lien insérer (création de page "insert.php", non accessible au modérateur!
            -->
            <?php
           /* if($_SESSION['idrole']!=2){
                ?>
            <a href="?action=insert">Insérer</a>
            <?php
            }*/
            ?>
            <a href="?action=deco">Se déconnecter</a></h3>
        <!--<p>
            Il y a 3 types de droit:<br/>
            <strong>Administrateur</strong> - Peut insérer, modifier, supprimer tous les articles de tous les utilisateurs<br/>
            <strong>Modérateur</strong> - Peut  modifier, supprimer tous les articles de tous les utilisateurs<br/>
            <strong>Rédacteur</strong> - Peut insérer, modifier ses propres articles<br/>
        <div id="articles">-->
             <!--<p align='center'><?=$pagination?></p>
            <!--
        si on est Admin on affiche tous les articles (300 caractères) avec le bouton modifier et supprimer (confirm en js)
        si on est Modérateur on affiche tous les articles (300 caractères) avec le bouton modifier et supprimer (confirm en js) (pas insertion voir menu
        si on est Rédacteur on affiche tous les articles (300 caractères) du rédacteur en question avec le bouton modifier
            
            via index.php, on peut appeler update.php, ! si Rédacteur, l'id de l'article doit appartenir à ce rédacteur, il ne peut changer d'auteur, il faut une vérification dans ce cas. Si on est Admin ou modo, on peut modifier qui a écrit l'article (select qui liste tous les auteurs, et sélectionne par défaut l'auteur actuel)
            
            via index.php, on peut appeler insert.php (sauf modo qui est éjecté), Si rédacteur, il ne peut choisir qui écrit la news: c'est lui. Si admin, on peut choisr qui écrit l'article
            -->
            <?php
            //var_dump($_SESSION);
            /*while($ligne= mysqli_fetch_assoc($recup_art)){
                echo "<h2>{$ligne['letitre']}";
                echo " <a href='?action=update&id={$ligne['id']}'><img src='img/icon_edit.png' alt='modif'/></a> ";
                // si on est pas rédacteur (suppression impossible)
                if($_SESSION['idrole']!=3){
                    echo " <a href='#' onclick='sup({$ligne['id']});return false;'><img src='img/delete_doc.jpg' alt='sup'/></a> ";
                }
                echo "</h2>";
                echo "<p>{$ligne['letexte']}...</p>";
                echo "<p>Le {$ligne['ladate']} par {$ligne['lelogin']}</p>";
            }*/
            ?>
           <!-- <p align='center'><?=$pagination?></p>-->
        </div>
        </p>
    </body>
</html>
