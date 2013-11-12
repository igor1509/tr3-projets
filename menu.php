
<!------------------------entête------------------>
<header>
  <div class="topsite"> <!-- création div topsite pour fixer image, le div enveloppe tout le header avec navbar comprise -->
                <div class="header">
                    <img src="images/logo2.png" id="logo" alt="logo du site"/><br/>
                    <span id="intro">Bienvenue chez AquaService</span>
                </div>
                <div class="header">
                    <div id="compte_connexion" class="header"><a href="#">Mon compte</a></div>
                </div>
                <div class="header">
                    <img src="images/panier2.png" id="panier" alt="panier du client"/><br/>
                </div>
            
<!-------------------------navbar---------------------------------------------->
        <div class="navbar-wrapper">
            <div class="container">

              <div class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">AquaService</a>
                  </div>
                  <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eau douce <b class="caret"></b></a>  <!-- menu déroulant, encore rendre cliquable -->
                        <ul class="dropdown-menu">
                          <li><a href="#">Poisson</a></li>
                          <li><a href="#">Plantes</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eau de mer <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Poisson</a></li>
                          <li><a href="#">Plantes</a></li>
                        </ul>
                      </li>
                      <li><a href="#contact">Contact</a></li>
                      
                    </ul>
                  </div>
                </div>
              </div>

            </div>
        </div>
 </div>
</header>