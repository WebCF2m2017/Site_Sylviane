<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>s
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gestion de calendrier | Evenement</title>
    <link rel="stylesheet" type="text/css" href="design/calendrier.css" media="screen" />
</head>
<body>
	<?php
		$typeDate = "#^[0-3]?[0-9]/[01]?[0-9]/[0-9]{4}$#";
		
		if(isset($_GET['d']) && preg_match($typeDate, $_GET['d'])) {
			// Traitement de l'affichage
			$date = htmlentities($_GET['d']);
			$tabDate = explode('/', $date);
			
			$req = "SELECT * FROM evenements WHERE id_evenement IN (SELECT id_evenement FROM calendrier WHERE jour_evenement=".$tabDate[0]." AND mois_evenement=".$tabDate[1]." AND annee_evenement=".$tabDate[2].")";
			
			include("../sql_connect.php");
			
			$evenements = mysqli_query($db,$req);
			
			if(mysqli_num_rows($evenements)) {
				while($evenement = mysqli_fetch_array($evenements)) {
					echo '
						<table>
							<tr>
								<th>'.$evenement['titre_evenement'].'</th>
							</tr>
							<tr>
								<td>'.$evenement['contenu_evenement'].'</td>
							</tr>
						</table>
						
						<br/><br/>
					';
					
				}
				
			} else {
				echo '<p>Il n\'y a aucun événement pour cette date.</p>';
			}
			
			mysqli_close($db);
		}
		
		echo '<p class="centre"><a href="index.php">Revenir à la page d acceuil</a></p>'
	?>
</body>
</html>
