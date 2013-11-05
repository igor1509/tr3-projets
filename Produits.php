<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css"/>
        <script src="assets/js/jquery.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="assets/js/holder.js"></script>
        <link href="dist/css/bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <title></title>
    </head>
    
    <body>
        <?php include("menu.php") ?>
        <?php include("connexion_bdd.php") ?>
          
     <div class="page-header">
        <h1 style="color:white">Poissons eau douce</h1>
      </div>
        <div class="conteneur">
        <div id="menu_articles"> 
     <!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Eau douce</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
    <div class="btn-group">
  <button type="button" class="btn btn-danger">Eau salée</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
     <div class="btn-group">
  <button type="button" class="btn btn-danger">Plantes</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
     <div class="btn-group">
  <button type="button" class="btn btn-danger">Matériel</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

     <div id="formulaire-ordre">
            <form action="Produits.php" method="post">
                <select class="form-control" name="ordre">
                <option value="A" selected>A-Z</option>
                <option value="Z">Z-A</option>
                <option value="plus">Le + cher</option>
                <option value="moins">Le - cher</option>
                </select>
            <input class="form-control" type="submit"/>
            </form>
     </div>
        
        </div>
        <div class="menu_produits">
        <div id="produits">
        
            
                       
                    <?php
                    
        $nbreArticles=6;
        $pageActuelle= (empty($_GET['page']) ? 0 :  $_GET['page']);
        
        if(!empty($_GET['ordre']))
            $_POST['ordre'] = $_GET['ordre'];
                    /*
                     $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun');
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     */

                     if(isset($_POST['ordre']) && $_POST['ordre']=="A")
                     {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun DESC LIMIT ' . ($nbreArticles * $pageActuelle) . ', ' . $nbreArticles);
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img class="img-thumbnail" src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     }
                     else if(isset($_POST['ordre'])=="Z")
                     {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun DESC LIMIT ' . ($nbreArticles * $pageActuelle) . ', ' . $nbreArticles);
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     }
                     else if(isset($_POST['ordre'])=="plus")
                         {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY prix LIMIT ' . ($nbreArticles * $pageActuelle) . ', ' . $nbreArticles);
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     }
                     else if(isset($_POST['ordre'])=="moins")
                         {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY prix DESC LIMIT ' . ($nbreArticles * $pageActuelle) . ', ' . $nbreArticles);
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     }
                     
                   

                    ?>
        </div>
        </div>
        </div>
        <?php
         
            $req_count=$bdd->query('SELECT COUNT(*) AS resultat FROM poissons');
            
            $donnee_count = $req_count->fetch();
            
            $nbPages = ceil($donnee_count['resultat'] / $nbreArticles);
            
            echo '<ul class="pagination">
             <li><a href="#">&laquo;</a></li>';
            for($i=0;$i<$nbPages;$i++)
            {
                $active = ($i==$pageActuelle) ? 'class="active"' : '';
                
                if(isset($_POST['ordre']))
                    echo '<li ' . $active. '><a href="Produits.php?page=' . $i . '&ordre=' . $_POST['ordre'] .' ">'. ($i+1) .'</a></li>';
                else
                    echo '<li ' . $active. '><a href="Produits.php?page=' . $i . '">'. ($i+1) .'</a></li>';
                    
            }
                if(isset($_POST['ordre']))
                    echo '<li><a href="Produits.php?page=' . ($pageActuelle+1) . '&ordre=' . $_POST['ordre'] .' ">&raquo;</a></li></ul>';
                else
                    echo '<li><a href="Produits.php?page=' . ($pageActuelle+1) .' ">&raquo;</a></li></ul>';
           ?> 
    </body>
</html>
