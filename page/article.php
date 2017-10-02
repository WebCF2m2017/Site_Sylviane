<?php
if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

	$recup = "SELECT a.id, a.titre, SUBSTRING(a.texte,1,200) AS letexte,a.url,a.ladate 
    FROM article a 
    INNER JOIN admin u
        ON u.idadmin = a.admin_idadmin
        ORDER BY a.ladate DESC
        ;
    ";
    
$recup_sql = mysqli_query($db,$recup)or die(mysqli_error($db));

?>
<!DOCTYPE html>
<html>
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

	<div class="row" id="menu">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!--<div class="container">-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
						<span class="sr-only"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
					<a href="#" class="navbar-brand"><a href="#"><img class='hidden-md hidden-lg' style="width:50px; height: 50px;" src="img/logo3.png" alt="Logo"></a></a> 
				</div>
				<div class="collapse navbar-collapse mynavbar" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav ">
						<li><a href="?accueil">Accueil</a></li>
						<li class="circle hidden-xs hidden-sm"></li>
						<li><a href="?presentation">Sophrologie</a></li>
						<li class="circle hidden-xs hidden-sm"></li>
						<li><a href="?autretech">Autres <br>approches</a></li>
						<li class="circle hidden-xs hidden-sm"></li>
						<li><a href="?formation">Formations</a></li>
						<!--<li><a href="#">Article</a></li>-->
						<li class="mylogo"><a href="#"><img src="img/logo3.png" alt="Logo"></a></li>
						<!--<li><a href="#">Qui suis-je</a></li>-->
						<li><a href="?article">Articles</a></li>
						<li class="circle hidden-xs hidden-sm"></li>
						
						<li><a href="?contact">Contact</a></li>
						
						<li class="circle hidden-xs hidden-sm"></li>
						<li><a href="?prive">Section abonnés</a></li>
						
						<li class="circle hidden-xs hidden-sm"></li>
						<!-- <li><a class="glyphicon glyphicon-user" href="#"></a></li> -->
						<li><a class="" href="#">S'inscrire</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse --> 
			<!--</div>-->
			<!-- /.container --> 
		</nav>
	</div>
	<div class="row">
		<section class="col-md-12 col-sm-12" >
			<article class="presentation" id="anchor-case2"">
				<h2 class="titrepresentation">Tous les articles</h2>
				<section class="bibi">
				<?php
            while ($ligne = mysqli_fetch_assoc($recup_sql)){
                ?>
                <article class="col-md-4 col-sm-12">
					<div id="anchor-case2">
							<div class="view view-first">
							    <img src="<?=$ligne['url']?>"> 
							     	<div class="mask">
								    	 <h2><?=$ligne['titre']?></h2>
								         		<a href="?articleseul=<?=$ligne['id_article']?>" class="info">Lire la suite</a>
							    	</div>
							</div>
					</div>
					<style>
</style>
				</article>
				<?php
            }
            ?>
            	</section>
			</article>
		</section>

	</div>	
	<footer class="footer-distributed">
		<div class="container" style="max-width: 1130px !important;">
			<img class="col-md-3" src="img/logo1.png" style="width:100px;height:100px;padding:0px;">
			<div class="footer-left col-md-3">
				<ul class="footer-links">
					<li style="font-size: 1.5em;"><a href="#">Plan du site </a></li>
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Présentation</a></li>
					<li><a href="#">Autres techniques</a></li>
					<li><a href="#">Séction privé</a></li>
					<li><a href="#">témoignage</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<p class="footer-company-name">ATHarmony &copy; 2017</p>
			</div>
			<div class="footer-center col-md-3">
				<ul>
					<li class="contactfooter">Contact </li>
					<li><i class="fa fa-map-marker"></i>Avenue du Parc 89,1060 Bruxelles</li>
					<li><i class="fa fa-phone"></i>02/539.03.60</li>
					<li><i class="fa fa-envelope"></i><a href="mailto:sylviane.mol.cf@gmail.com">sylviane.mol.cf@gmail.com</a></li>
				</ul>
			</div>
			<div class="footer-right col-md-3">
				<p class="footer-company-about">
					<span>À propos de nous </span>
						Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
					<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>
</a>
				</div>
			</div>
		</div>
	</footer>
<script type="text/javascript" src='js/calendrier.js'></script>
<script type="text/javascript" src='js/carouseltemgn.js'></script>
</body>
</html>
