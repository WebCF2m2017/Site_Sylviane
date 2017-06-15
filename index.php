<?php
if(empty($_GET)&&empty($_POST)){
    require_once 'accueil.php';
}elseif (isset($_GET['accueil'])) {
  require_once 'accueil.php';
}
elseif(isset($_GET['article'])){
    require_once 'article.php';
}

?>
