<?php
/* Connection avec la DB */
require_once("dbcontroller.php");
/* création d'un nouvel objet de classe DBController, on instancie un nouvel objet : $maDB */
$maDB = new DBController();

$query = "SELECT * FROM files WHERE type LIKE 'image%' ORDER BY id";

$resultat = $maDB->runQuery($query);
	
if (!empty($resultat)) {
?>
<!DOCTYPE html>
<html>
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>jQuery File Upload Demo</title>
</head>
<body>
	<h1>Affichage des photos</h1>
	<ul id="liste-photo">
		<?php
		foreach($resultat as $photo) {
			?>
			<li><img src="<?php echo $photo["url"]; ?>" alt="<?php echo $photo["description"]; ?>" title="<?php echo $photo["description"]; ?>" width="300px" /></li>
		<?php } ?>
	</ul>
<?php		
	} else {
		echo '<ul id="liste-photo"><li>Pas de photo</li></ul>';
	}
?>
</body>
</html>
