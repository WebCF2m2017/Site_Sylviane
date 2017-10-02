<?php
// Classe DBController
class DBController {
	// Attributs ou propriétés de la classe DBController
	private $host = "localhost";		// nom du serveur
	private $user = "root";				// nom de l'utilisateur
	private $password = "";				// mot de passe
	private $database = "upload";		// nom de la base de données
	
	// Méthodes de la classe DBController
	function __construct() {			// constructeur
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	// méthode pour se connecter au serveur
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		mysqli_set_charset($conn, "utf8");
		return $conn;
	}
	
	// méthode pour choisir la base de données
	function selectDB($conn) {
		mysqli_select_db($conn,$this->database);
	}
	
	// méthode pour exécuter une requête
	// $query contient la requête SQL à exécuter
	function runQuery($query) {
		// on utilise la connection vers la base de données pour lancer la requête et recevoir le résultat
		$result = mysqli_query($this->connectDB(),$query);
		// on analyse le résultat de la requête
		while($row=mysqli_fetch_assoc($result)) {
			// on boucle tant que on reçoit des enregistrements et on les stocke dans un tableau
			$resultset[] = $row;
		}
		// si le tableau d'enregistrements $resultset n'est pas vide, on renvoie ce tableau
		if(!empty($resultset)) {
			return $resultset;
		}
	}
	
	// méthode pour compter le nombre d'enregistrements
	// $query contient la requête SQL à exécuter
	function numRows($query) {
		// on utilise la connection vers la base de données pour lancer la requête et recevoir le résultat
		$result  = mysqli_query($this->connectDB(),$query);
		// on compte le nombre d'enregistrements
		$rowcount = mysqli_num_rows($result);
		// on renvoie le nombre d'enregistrements
		return $rowcount;	
	}
}
?>