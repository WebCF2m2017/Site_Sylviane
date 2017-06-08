<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="logoAH100px.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- Optional theme -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css"> -->
	<!-- <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> -->

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css"> -->
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>

	<!-- Lien vers la librairie d'icones Font Awesome 4.7.0 & FONT GOOGLE -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

	<!-- LINK CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- JQUERY UI  & JQUERY CALL-->
	<link rel="stylesheet" type="text/css" href="js/jqueryui1121/jquery-ui.css">
	<!-- <link rel="stylesheet" type="text/css" href="js/jqueryui1121/jquery-ui.structure.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="js/jqueryui1121/jquery-ui.theme.min.css"> -->
	<script type="text/javascript" src="js/jqueryui1121/jquery-ui.min.js"></script>
<!-- NICESCROLL -->
  	
	<title>At Harmony</title>
</head>
<body>
		<!-- NAVBAR -->
<div class="row" id="menu">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false" aria-controls="collapse-menu">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			    <a class="navbar-brand" href="./"><img src="logoAH100px.png" class="img-responsive"></a>
		</div>
		<div class="collapse navbar-collapse" id="collapse-menu">
			<ul class="nav navbar-nav">
				<li class="active"><a href="./">Accueil<span class="sr-only"><i class="fa fa-home" aria-hidden="true"></i></span></a></li>
				<li><a href="?presentation">Présentation</a></li>
				<li><a href="?alter">Autres tech</a></li>
				<li><a href="?formation">Formation</a></li>
				<li><a href="?article">Article</a></li>
				<li><a href="?desc">Qui suis-je</a></li>
				<li><a href="?private">Section privé</a></li>
				<li><a href="?comms">Témoignage</a></li>
				<li><a href="?contact">Contact</a></li>
			</ul>
		</div>
	</nav>		
</div>
	<div id="global">

<!-- <div class="menu-global">
	<ul>
		<div class="menu-bloc"><li class="active"><a href="./">Accueil</a></li><i class="fa fa-home fa-5x" aria-hidden="true"></i></div>
		<div class="menu-bloc"><li><a href="?presentation">Présentation</a></li></div>
		<div class="menu-bloc"><li><a href="?alter">Autres tech</a></li></div>
		<div class="menu-bloc"><li><a href="?formation">Formation</a></li></div>
		<div class="menu-bloc"><li><a href="?article">Article</a></li><i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i></div>
		<div class="menu-bloc"><li><a href="?desc">Qui suis-je</a></li></div>
		<div class="menu-bloc"><li><a href="?private">Section privé</a></li></div>
		<div class="menu-bloc"><li><a href="?comms">Témoignage</a></li></div>
		<div class="menu-bloc"><li><a href="?contact">Contact</a></li></div>
	</ul>
</div> -->	
	<!-- CONTENT -->
		<div id="galery-img" class="row">
			<div id="galery">
			</div>
		</div>
		<section id="section_1">
			<div id="desc_global">
				<p id="titre_desc">Présentation AT Harmony</p>
				<p id="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iure exercitationem nisi illo voluptatum odio ipsam nulla quod similique! Voluptate, consectetur vitae facere non quisquam laborum ad obcaecati quaerat pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deserunt quisquam, sunt ut odio, neque laboriosam illo officiis perferendis accusantium rerum dignissimos maxime. Enim rem perferendis, voluptatum dolore autem aliquam?<a href="?presentation">Cliquez ici pour plus d'info</a></p>
			</div>
			<div id="datepicker"></div>
		</section>


		<section id="section_2">
			<div id="dialog" title="Article 1">Article n°1 description : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error doloribus consequatur est nesciunt repudiandae ea, officiis, dicta hic tenetur, eius porro quod, impedit totam! Ut cupiditate, suscipit reprehenderit nostrum veritatis!</div>
			<button id="open"><img src="article/article1.png" class="img-responsive img-thumbnail" ></button>
			<div id="dialog">Article n°2 description : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad porro iusto dolor veritatis ipsa vel. Dolorum eligendi illum neque modi, accusantium in reprehenderit, ut at tenetur aliquam temporibus, quidem eum.</div>
			<button id="open"><img src="article/article2.png" class="img-responsive img-thumbnail"></button>
		</section>
	<footer class="footer_global">
			<div id="footer">
				<div id="footer_res_soc">
					<a href="#"><i class="fa fa-twitter fa-3x fa-pull-right col-md-offset-8 img-thumbnail pull-right" id="twitter" aria-hidden="true"></i></a>
					<!--TWITTER -->
					<a href="#"><i class="fa fa-facebook-official fa-3x col-md-offset-9 img-thumbnail pull-right" id="facebook" aria-hidden="true"></i></a> 	
					<!-- FACEBOOK -->
					<a href="#"><i class="fa fa-pinterest-p fa-3x col-md-offset-10 img-thumbnail pull-right" id="pinterest" aria-hidden="true"></i></a> 
					<!-- PINTEREST -->
					<a href="#"><i class="fa fa-google-plus-official fa-3x col-md-offset-11 img-thumbnail pull-right" id="google" aria-hidden="true"></i></a>
					<!-- G-MAIL -->
				</div>
				<p id="titre_footer">At Harmony Copyright<i class="fa fa-copyright" aria-hidden="true"></i></p>
			</div>
	</footer>
	</div>
	<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
  	<script type="text/javascript" src="js/global.js"></script>
</body>
</html>