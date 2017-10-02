<?php
if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
    exit();
}

// si le formulaire est envoyé
if(isset($_POST['titre'])&&isset($_POST['texte'])&&!empty($_POST['titre'])&&!empty($_POST['texte'])){
    // protection de la chaîne 'titre'
    $titre = htmlspecialchars(strip_tags(trim($_POST['titre'])),ENT_QUOTES);
    $texte = htmlspecialchars(strip_tags(trim($_POST['texte'])),ENT_QUOTES);
    $sql_auteur ="INSERT INTO article (titre,texte) VALUES ('$titre','$texte');";
    // on insert l'article
    $insertion = mysqli_query($db, $sql_auteur) or die("Erreur! ". mysqli_error($db));
    }else{
        $erreur ="Veuillez remplir tous les champs <a href='#' onclick='history.go(-1);'>Retour au formulaire</a>";
    }
    


?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
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
        <title>Administration - Insertion</title>
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
                                <i class="fa fa-fw fa-file"></i> Audio
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
        <form action="" name="onsenfout" method="POST">
            <input type="text" class="form-control" name="titre" placeholder="Votre titre" required /><br/>
            <textarea name="texte" placeholder="Votre texte" required"></textarea><br/>
            <?php
            if(isset($erreur)){
                echo $erreur;
            }
            ?>
            <input type="submit" value="Insérer" />
        </form>
                </div>

               <!-- INSERTION D'ARTICLE -->
               <div class="row">
        <section class="col-md-12 col-sm-12 fontstyle">
            <article class="presentation">
                
               
            
            
            </article>
        </section>

    </div>  
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  

    </body>
</html>
