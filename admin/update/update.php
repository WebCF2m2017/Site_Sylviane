<?php

// on vérifie l'existance des 4 variables POST, qui ne doivent pas être vides (2 prem) et de type numérique (3,4) et la 4eme doit correspondre à update_article.php
if(isset($_POST['titre'])&&!empty($_POST['titre'])
   && isset($_POST['texte'])&&!empty($_POST['texte'])
   && isset($_POST['url'])&& ctype_digit($_POST['url'])
   && isset($_POST['id'])&& ctype_digit($_POST['id'])&& $_POST['id']==$_GET['update']
   && isset($_POST['ladate'])){
    
    // pour ladate, on vérifie si on sait la transformer en timestamp
    $date = strtotime($_POST['ladate']);
    // non convertible en date
    if(!$date){
        $datesql ="";
    }else{
        $datesql = ", ladate='{$_POST['ladate']}' ";
    }

    // on place ces variables dans des variables locales
        $titre = htmlspecialchars(strip_tags(trim($_POST['titre'])),ENT_QUOTES);
        // idem en 1 ligne
        $texte = htmlspecialchars(strip_tags(trim($_POST['texte'])),ENT_QUOTES);
        $url = htmlspecialchars(strip_tags(trim($_POST['url'])),ENT_QUOTES);
        // technique permettant d'être sûre qu'une attaque sql est impossible!
        // $texte = mysqli_real_escape_string($db,$texte);
        // conversion de id en integer
        $id = (int) $_POST['id'];

    // On insert l'article
    $sql ="UPDATE article SET titre='$titre',texte='$texte',url='$url' WHERE id=$id;";
    
    $recup_utils = mysqli_query($db,$sql)or die("Echec de l'update: ". mysqli_error($db));
    // si on veut une redirection (aucune erreur)
    
    header("Location: ./");
    
   }elseif($erreur){
       $erreur = "Modification non effectuée";
   }else{
    // on récupère l'id de l'article et on le transforme en int
    $idarticle = (int) $_GET['id'];
    // requête pour remplir les champs avec l'article
    $sql_recup = "SELECT a.id, a.titre, a.texte,a.url 
        FROM article a 
        WHERE a.id=$id";
    // récupération de l'article
    $recup_article = mysqli_query($db, $sql_recup);
    // si on a un article
    if (mysqli_num_rows($recup_article)) {
        // mise en tableau associatif
        $ligne = mysqli_fetch_assoc($recup_article);
    } else {
        $erreur = "Article non existant!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({
      selector: 'textarea',
      height: 500,
        language_url: ' tinymce_languages/langs/fr_FR.js',
      theme: 'modern',
      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      templates: [
        { title: 'Test template 1', content: 'Test 1' },
        { title: 'Test template 2', content: 'Test 2' }
      ],
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ]
     });</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">Admin by Houssain</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Sylviane <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?action=deco"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="./"><i class="fa fa-fw fa-dashboard"></i> Accueil</a>
                    </li>
                    <li class="active">
                        <a href="?action=article"><i class="fa fa-fw fa-file"></i> Article</a>
                    </li>
                    <li>
                        <a href="?action=calendrier"><i class="fa fa-fw fa-table"></i> Calendrier</a>
                    </li>
                    <li>
                         <a href="?action=temoignage"><i class="fa fa-fw fa-edit"></i> Témoignage</a>
                    </li>
                    <li>
                        <a href="?action=audio"><i class="fa fa-fw fa-file-audio-o"></i> Audio</a>
                       
                    </li>
                    <li>
                        <a href="?action=utilisateur"><i class="glyphicon glyphicon-user"></i> Gérer les utilisateurs</a>
                    </li>
                    <li>
                        <a href="?action=carousel"><i class="glyphicon glyphicon-picture"></i> Carousel</a>
                        
                    </li>
                    <li>
                        <a href="?action=formation"><i class="fa fa-fw fa-file"></i> Page Formation</a>
                    </li>
                    <li>
                        <a href="?action=newsletter"><i class="fa fa-fw fa-newspaper-o"></i> News Letter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Espace Admin <small>#Houssain</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="./">Accueil</a>
                            </li>
                             <li class="active">
                                <i class="fa fa-fw fa-file"></i> Article
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenue dans votre espace Article
                        </h1>
                    </div>
                </div>
                <?php
                    if(isset($erreur)){
                        echo "<h3>$erreur</h3> <a onclick='history.go(-1);' href=''>Retour au formulaire</a>";
                    }else{
                        echo "<h2>Article Modifié!</h2>";
                    }
                ?>
               <!-- INSERTION D'ARTICLE -->
             
              
               <div class="row">
        <section class="col-md-12 col-sm-12 fontstyle">
            <article class="presentation">

                <form action="" name="onsenfout" method="POST">

                <form action="" name="onsenfout" method="post">

                    <h3>Titre de l'article</h3>
                    <input style="width: 70vw;" type="text" name="titre" placeholder="Votre titre" value="<?= $ligne['titre'] ?>" required /><br/><br/>
                    <h3>URL de l'image</h3>
                    <input style="width: 70vw;" type="text" name="url" placeholder="Votre titre" value="<?= $ligne['url'] ?>" required /><br/><br/>
                    <textarea style="width: 100%;" name="texte"><br /> <?php echo $ligne['texte']; ?> </textarea>
                    <input name="send" type="submit" value="Modifier" />
                </form>
            </article>
           <style>
               
               input{
                width: 200px;
                margin: 0;
                margin-right: auto;
                margin-left: auto;
               }
           </style>
        </section>

    </div>  
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  

</body>

</html>
