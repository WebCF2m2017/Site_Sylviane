<?php
if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

if(!strstr($_SERVER['PHP_SELF'],"index.php")){
    header("Location: ./");
}

    $recup = "SELECT * FROM temoignage
        ORDER BY ladate DESC
        ;
    ";
    
$recup_sql = mysqli_query($db,$recup)or die(mysqli_error($db));
/*$requete = mysqli_query($db, "SELECT COUNT(id) AS nb FROM article;");
$requete_assoc = mysqli_fetch_assoc($requete);
$nb_tot = $requete_assoc['nb'];
// calcul pour le premier argument du LIMIT
$limit = ($pg-1)*$par_page;

if($_SESSION['idrole']==1||$_SESSION['idrole']==2){
    $complement_sql= "";
}else{ // simple util
    $complement_sql= "WHERE au.id = ".$_SESSION['id'];
}
    // récupération des articles suivant les droits
$recup_art = mysqli_query($db,"SELECT a.id, a.letitre, SUBSTRING(a.letexte,1,300) AS letexte, a.ladate, a.auteur_id, au.lelogin FROM article a INNER JOIN auteur au ON au.id = a.auteur_id $complement_sql ORDER BY a.ladate DESC LIMIT $limit, $par_page;");
$pagination = maPagination($nb_tot, $pg,$lulu,$par_page);
*/
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
                    <li>
                        <a href="?action=article"><i class="fa fa-fw fa-file"></i> Article</a>
                    </li>
                    <li>
                        <a href="?action=calendrier"><i class="fa fa-fw fa-table"></i> Calendrier</a>
                    </li>
                    <li  class="active">
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
                                <i class="fa fa-fw fa-edit"></i> Témoignage
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenue dans votre espace Témoignage
                        </h1>
                    </div>
                </div>
                   
               <div class="row">
        <section class="col-md-12 col-sm-12 fontstyle">
            <article class="presentation">
                <h2 class="titrepresentation">Tout les articles</h2>
                <!-- <?php
            // while ($ligne = mysqli_fetch_assoc($recup_sql)){
                ?>
                <article class="col-md-12 col-sm-12">
                    <div class=>                
                        <h2><?=$ligne['titre']?></h2>
                        <p><?php echo $ligne['texte']?></p>
                        <p><?php echo $ligne['ladate']?></p>
                    </div>
                </article> -->
                <form name="bulk_action_form" action="action.php" method="post" onsubmit="return deleteConfirm();"/>

                     <a type="submit" class="btn btn-primary" href="?action=insertTemoign">Insérer <i class="glyphicon glyphicon-plus"></i></a>
                    <a type="submit" class="btn btn-warning" onclick='sup({$ligne["id"]});' href="?action=modifier">Modifier</a>
                    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
                    <table class="bordered">
                        <thead
                        style='margin-top: 20px !important;'>
                        <tr>
                            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
                            <th>Modifier</th>
                            <th>Login</th>
                            <th>Témoignage</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <?php
                            if(mysqli_num_rows($recup_sql) > 0){
                                while($ligne = mysqli_fetch_assoc($recup_sql)){
                        ?>
                        <tr>
                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $ligne['id_temoign']; ?>"/></td>  
                            <td><a href='?action=update&id=<?php echo $ligne["id_temoign"]?>'><img src='img/icon_edit.png' alt='Modifier' /></a></td>    
                            <td><?php echo $ligne['login']; ?></td>
                            <td><?php echo $ligne['texte']; ?></td>
                            <td><?php echo $ligne['ladate']; ?></td>
                        </tr> 
                        <?php } }else{ ?>
                            <tr><td colspan="5">Pas d'éléments trouvés.</td></tr> 
                        <?php } ?>
                    </table>
                    
                    <style type="text/css">
                        td{
                            padding: 20px;

                        }
                        th{
                            text-align: center;
                        }
                    </style>
                    
                </form>
            <!--    <?php
            
            ?>
            </article> -->
        </section>

    </div>  
            </div>
            <!-- /.container-fluid -->
            
        </div>
        <!-- /#page-wrapper -->
        
    </div>
    <!-- /#wrapper -->
 <script type="text/javascript">
        function deleteConfirm(){
            var result = confirm("Vous êtes de sur de vouloir supprimer votre selection?");
            if(result){
                return true;
            }else{
                return false;
            }
        }

    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        
        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
</script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
