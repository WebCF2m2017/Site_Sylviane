<?php
if(isset($_POST['clogin'])&&isset($_POST['cmdp'])){
    $login = htmlspecialchars(strip_tags(trim($_POST['clogin'])),ENT_QUOTES);
    $mdp = trim($_POST['cmdp']);
    // encodage en sha256 pour vérifier la concordance dans la db
    $mdp = sha256($mdp);
    // si login vaut (non strictement) true (pas de chaîne vide ni de 0, ni false)
    if($login){
        // requête pour vérifier si l'utilisateur existe et peut se connecter
        $sql="SELECT a.id, a.lelogin, a.lemail 
            FROM auteur a 
            WHERE a.lelogin = '$login' AND a.lemdp = '$mdp';
            ";
        $recup_util = mysqli_query($db, $sql)or die(mysqli_error($db));
        // si on récupère un résultat
        if(mysqli_num_rows($recup_util)){
           
            // création des autres clefs de session en mettant le tableau de réponses sql directement dans la globale de session
            $_SESSION = mysqli_fetch_assoc($recup_util);
            // créer la clef de session dans une variable de session 
            $_SESSION['clef_de_session']=session_id();
            
            // redirection imédiate vers l'accueil pour actuialiser le routeur
            header("Location: ./");
            
        }else{ // on a rien
            $erreur = "Login et/ou mot de passe incorrecte(s)!";
        }
    }else{
        // tentative de hack du formulaire
        header("Location: disconnect.php");
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Se Connecter</title>
    </head>
    <body>
        <h1>Se Connecter</h1>
        
        <form action="" method="POST" name="connection">
            <input type="text" name="clogin" placeholder="Votre login" required /><br/>
            <input type="password" name="cmdp" placeholder="Votre mot de passe" required /><br/>
            <input type="submit" value="Se connecter"/>
        </form>
        <h2><a href='/perso'>Retour à l'accueil du site</a></h2>
        <?php
        if(isset($erreur)){ echo "<h3>$erreur</h3>";}
        ?>
    </body>
</html>
