<?php


if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

$idadmin = (int) $_GET['idadmin'];

$sql="SELECT a.id_article,a.titre,a.texte,a.ladate
FROM article a
inner join admin login
ON admin_idadmin = $idadmin
ORDER BY ladate DESC
LIMIT 3
;";
$recup_article = mysqli_query($db,$sql);

if(!mysqli_num_rows($recup_article)){
    $erreur = "C'est article n'existe plus";
}else{
    $row = mysqli_fetch_assoc($recup_article);
}

?>
<!DOCTYPE HTML>
<html>
<!--pagination-->
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/calendrier.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<meta charset="utf-8" />
	<title>Sophrologie-AT-Harmony</title>
</head>
<body>
<!-- ici la vue ! --->
<?php
if(isset($erreur)){
    echo "<h2>$erreur</h2>";
}else{

    ?>
<h2><?=$row['letitre']?></h2>
<p><?php echo nl2br($row['letexte'])?></p>
<h4><?=$row['ladate']?>
<hr/>
<?php
}
?>
</body>
</html>
