<?php
    session_start();
    include_once('config.php');
    if(isset($_POST['bulk_delete_submit'])){
        $idArr = $_POST['checked_id'];
        foreach($idArr as $id){
            mysqli_query($conn,"DELETE FROM article WHERE id_article=".$id);
        }
        $_SESSION['success_msg'] = 'Vos articles ont bien été supprimé.';
        header("Location:index.php");
    }
?>