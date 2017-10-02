<?php

    $sql ="DELETE FROM article WHERE id=$article_id;";
    // on supprime l'article
    $sup = mysqli_query($db, $sql) or die("Erreur! ". mysqli_error($db));
    
    header("Location: ./");
