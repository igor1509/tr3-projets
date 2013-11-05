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
      <div class="dropdown theme-dropdown clearfix">
        <a id="dropdownMenu1" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eau douce</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eau salée</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Koi et bassins</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Matériel</a></li>
        </ul>
      </div>
            
            <form action="Produits.php" method="post">
                <select name="ordre">
                <option value="A">A-Z</option>
                <option value="Z">Z-A</option>
                <option value="plus">Le + cher</option>
                <option value="moins">Le - cher</option>
                </select>
            <input type="submit"/>
            </form>
        
        </div>
        <div class="menu_produits">
        <div id="produits">
        
            
                       
                    <?php
                    
                     $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun');
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     
                     if(isset($_POST['ordre'])=="A")
                     {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun');
                        while($donnees=$rep->fetch())
                        {
                             echo '<div class="article" ><p>'.$donnees['nom_commun'].'<br/>
                                 '.$donnees['taille'].' cm<br/>
                                 '.$donnees['prix'].' €    </p>
                                 <img src="' .$donnees['image'] .'"/><br/>
                                 <img src="images/offre.jpg"/><img src="images/panier3.jpg"/></div>';
                        }
                     }
                     else if(isset($_POST['ordre'])=="Z")
                     {
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY nom_commun DESC');
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
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY prix');
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
                         $rep = $bdd->query('SELECT * FROM poissons ORDER BY prix DESC');
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
        
    </body>
</html>
