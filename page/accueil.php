<?php
if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

	$recup = "SELECT a.id, a.titre, SUBSTRING(a.texte,1,300) AS letexte, a.ladate 
    FROM article a 
    INNER JOIN admin u
        ON u.idadmin = a.admin_idadmin
        ORDER BY a.ladate DESC
        limit 3;
    ";
    $lulu = "SELECT t.id_temoign, t.texte,t.login, t.ladate 
    FROM temoignage t 
        ORDER BY t.ladate DESC
        limit 3;
    ";
    $image="SELECT * FROM files WHERE type like 'image%'  ORDER BY id DESC limit 3";

$recup_sql = mysqli_query($db,$recup)or die(mysqli_error($db));
$recup_lulu = mysqli_query($db,$lulu)or die(mysqli_error($db));
$recup_image = mysqli_query($db,$image)or die(mysqli_error($db));
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
						<li><a class="" href="#">Connexion</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse --> 
			<!--</div>-->
			<!-- /.container --> 
		</nav>
	</div>
	<div class="row slider">
		<section class="section-white">
    		<div id="1" class="carousel slide" data-ride="carousel">
	      		<!-- Indicators -->
			    <ol class="carousel-indicators">
			    	<li data-target="#1" data-slide-to="0" class="active"></li>
			        <li data-target="#1" data-slide-to="1"></li>
			        <li data-target="#1" data-slide-to="2"></li>
			    </ol>
      			<div class="carousel-inner">
      				<?php
						$a="item active";
			            while ($ligne = mysqli_fetch_assoc($recup_image)){
			                ?>
					
		
			                <div class="<?=$a?>">
					  			<div class="row">
					    			<div class="col-sm-12">
					      				<img style='margin-left: 15px;' class="img-responsive" src='<?php echo $ligne['url']?>' >
					      				<div class="carousel-caption">
            								<h2><?php echo $ligne['title']?></h2>
          								</div>
					    			</div>
					  			</div>
							</div>
						
						<?php
							$a="item";
						
			            }
			            ?>
      			</div>
      			<a class="left carousel-control" href="#1" data-slide="prev">
        			<span class="glyphicon glyphicon-chevron-left"></span>
      			</a>
      			<a class="right carousel-control" href="#1" data-slide="next">
        			<span class="glyphicon glyphicon-chevron-right"></span>
      			</a>
    		</div>	
		</section>
	</div>
	<div class="row">
		<section class="col-md-8 col-sm-12 fontstyle">
			<article class="presentation">
				<h2 class="titrepresentation" style="font-family: 'Dancing Script', cursive; font-size: 50px !important; color: #AA6B29;">At Harmony en quelques mots ...</h2>
				<p>Les aléas du quotidien engendrent stress, tension et déséquilibre.  C’est notre qualité de vie et notre santé qui sont menacées.</p>
		 		<p>At Harmony vous offre un panel d’approches pour participer à votre bien-être physique, émotionnel, mental et relationnel.  Des techniques simples à mettre en place permettent de mieux vivre et d’utiliser vos potentiels de la meilleure manière. Elles peuvent se suffire à elle-même ou se combiner pour se renforcer l’une l’autre.</p>
				<p>Les services offerts sont proposés sous forme :
				<ul class="service">
					<li><span class="glyphicon glyphicon-ok"></span>&nbsp; de consultations individuelles, </li>
					<li><span class="glyphicon glyphicon-ok"> </span>&nbsp; d’ateliers en groupe de différents niveaux pour la sophrologie</li>
					<li><span class="glyphicon glyphicon-ok"> </span>&nbsp; de modules de formation</li>
				</ul>
				</p>
				<p><a class="mot_cleacceuil" href="">La sophrologie</a> par son approche psychocorporelle vise à réharmoniser notre corps, nos émotions et notre mental.  Elle permet de retrouver l’équilibre si précieux pour notre bien-être. <a class="mot_cleacceuil" href="">Lire la suite</a></p>
				<p><a class="mot_cleacceuil" href="">Les huiles essentielles et fleurs de Bach </a>par leurs actions sur notre sphère émotionnelle peuvent renforcer les bienfaits de la sophrologie.<a class="mot_cleacceuil" href="">Lire la suite</a> </p>
				<p><a class="mot_cleacceuil" href="">Des outils d’apprentissage intégrés</a> vous soutiennent non seulement pendant votre scolarité mais aussi tout au long de la vie en optimisant vos activités intellectuelles et vous permettent également d’apporter un soutien plus efficace mais également plus serein aux devoirs de vos enfants <a class="mot_cleacceuil" href="">Lire la suite</a></p>
				<p>Une approche de <a class="mot_cleacceuil" href="">la communication par la méthode Gordon</a>, vous aide à améliorer vos relations aux autres tant dans la sphère familiale, intime, amicale que professionnelle <a class="mot_cleacceuil" href="" style="font-style: italic;">... Lire la suite</a></p>
				<p><a class="mot_cleacceuil" href="">La réflexologie plantaire</a> est un massage du pied et de la voûte plantaire qui agit sur le stress, la réduction des tensions musculaires, le soulagement de certaines douleurs, le sommeil.<a class="mot_cleacceuil" href="">Lire la suite</a></p>
			</article>
		</section>

		<aside class="col-md-4 col-sm-12">
			<h2 class="h2" style="font-family: 'Dancing Script', cursive; font-size: 50px !important; color: #AA6B29;">Agenda</h2>
			<div>
	    		<div class="app__main">
					<div class="calendar">
						<div id="calendar"></div>
	       			 </div>
	    		</div>
			</div>
		</aside>
	</div>
	<div class="row">
		<section class="col-md-12 fontstyle article">
	>
			<h1 class="articleRecent">Articles récents </h1>

			
			<?php
            while ($ligne = mysqli_fetch_assoc($recup_sql)){
                ?>
                <article class="col-md-4 col-sm-12 artcile1">
					<div class="box">				
						<h2><?=$ligne['titre']?></h2>
						<p><?php echo $ligne['letexte']?>...</p>
						<div class="div">
							<a href="?article" class="btn blue">Lire la suite</a>
						</div>
					</div>
				</article>
				<?php
            }
            ?>
			
		
	</div>
		</section>
	
	<div class="container">
	  	<div class="row">
	    	<div class="col-md-12">
	    		<h1 class="titretemoing">Témoignage</h1>
		      	<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<!-- Bottom Carousel Indicators -->
					<ol class="carousel-indicators">
				  		<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
				  		<li data-target="#quote-carousel" data-slide-to="1"></li>
				  		<li data-target="#quote-carousel" data-slide-to="2"></li>
					</ol>  
					<!-- Carousel Slides / Quotes -->
					<div class="carousel-inner">
						<?php
						$a="item active";
			            while ($ligne = mysqli_fetch_assoc($recup_lulu)){
			                ?>
						
							<!-- Quote 1 -->
		
			                <div class="<?=$a?>">
					  			<div class="row">
					    			<div class="col-sm-12">
					      				<p class="commentaire"><?php echo $ligne['texte']?></p>
					      				<small><strong><?php echo $ligne['login']?></strong></small>
					    			</div>
					  			</div>
							</div>
						
						<?php
							$a="item";
						
			            }
			            ?>
					</div>
	    		</div>                          
			</div>
		</div>
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
					<li><a href="#">Témoignage</a></li>
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
						Sylviane d’At Harmony est au service de votre sérénité et de votre bien-être à Rebecq Quenast et environs ( Tubize, Braine le château, Braine le comte, Hennuyères, Enghien, Virginal, Ittre, Soignies )
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