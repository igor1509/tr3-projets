<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
         
        
        <form action="admin.php" method="post">
            Nom commun :<br/>
            <input type="text" name="nomcom"/><br/>
            Nom scientifique :<br/>
            <input type="text" name="nomscient"/><br/>
            Type d'eau :<br/>
            <select name="typeeau">
                <option value="douce">Douce</option>
                <option value="salee">Salée</option>
                <option value="saumatre">Saumâtre</option>
            </select><br/> 
            Famille :<br/>
           <select name="famille">
                <option value="discus">Discus</option>
                <option value="africainfluvial">Africain fluvial</option>
                <option value="arowana">Arowanas</option>
            </select><br/> 
            Taille :<br/>
            <input type="text" name="taille"/><br/>
            Prix :<br/>
            <input type="text" name="prix"/><br/>
            Disponibilité :<br/>
            <input type="text" name="dispo"/><br/>
            Image :<br/>
            <input type="text" name="image"/><br/>
            Litrage de l'aquarium :<br/>
            <input type="text" name="litrageaqua"/><br/>
            Maintenance :<br/>
            <select name="maintenance">
                <option value="facile">Facile</option>
                <option value="moyen">Moyen</option>
                <option value="difficile">Difficile</option>
                <option value="impossible">Impossible</option>
            </select><br/>
            Quantité disponible :<br/>
            <input type="text" name="quantite"/><br/>
            Origine :<br/>
            <select name="origine">
                <option value="asie">Asie</option>
                <option value="ameriquenord">Amérique du nord</option>
                <option value="ameriquesud">Amérique du sud</option>
                <option value="europe">Europe</option>
                <option value="oceanie">Océanie</option>
                <option value="merrouge">Mer rouge</option>
                <option value="oceanatl">Océan atlantique</option>
                <option value="oceanpacif">Océan Pacifique</option>
                <option value="oceanind">Océan Indien</option>
                <option value="autres">Autres</option>
            </select><br/> 
             Température de l'eau :<br/>
            <input type="text" name="temperature"/><br/>
             Ph de l'eau :<br/>
            <input type="text" name="ph"/><br/>
             Dureté de l'eau<br/>
            <input type="text" name="durete"/><br/>
             Zone de vie :<br/>
            <select name="zonedevie">
                <option value="haut">Haut</option>
                <option value="milieu">Milieu</option>
                <option value="fond">Fond</option>
            </select><br/> 
            Description :<br/>
            <textarea name='description' rows='20' cols='20'>
            </textarea><br/>
            Espérance de vie :<br/>
            <input type="text" name="esperancedevie"/><br/>
            Comportement :<br/>
            <textarea name='comportement' rows='20' cols='20'>
            </textarea><br/>
            Reproduction :<br/>
            <select name="reproduction">
                <option value="facile">Facile</option>
                <option value="moyenne">Moyenne</option>
                <option value="difficile">Difficile</option>
                <option value="impossible">Impossible</option>
            </select><br/> 
            Dimorphisme :<br/>
            <textarea name='dimorphisme' rows='20' cols='20'>
            </textarea><br/>
            ENVOYER=><input type="submit"/>
        </form>
        
        <?php 
        try 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=aquaservice',"root","");
        }
        catch(Exception $e)
        {
            die('ERREUR'. $e->getMessage());
        }
        
        $req = $bdd->prepare('INSERT INTO poissons(nom commun,nom scientifique,famille,taille,origine,temperature,ph,durete,zone de vie,description,esperance de vie,comportement,reproduction,dimorphisme,disponiblite,prix,image,taille aqua,facilite,quantite,type eau,date) VALUES (:nom1,:nom2,:famille,:taille,:origine,:temp,:ph,:durete,:zone,:descrip,:esperance,:comport,:reprod,:dimorph,:dispo,:prix,:image,:tailleaqua,:facilite,:quantite,:typeeau,:date)');
       
        $req->execute(array( 
                 'nom1' => $_POST['nomcom'],
                 'nom2' => $_POST['nomscient'],
                 'famille' => $_POST['famille'],
                 'taille' => $_POST['taille'],
                 'origine' => $_POST['origine'],
                 'temp' => $_POST['temperature'],
                 'ph' => $_POST['ph'],
                 'durete' => $_POST['durete'],
                 'zone' => $_POST['zonedevie'],
                 'descrip' => $_POST['description'],
                 'esperance' => $_POST['esperancedevie'],
                 'comport' => $_POST['comportement'],
                 'reprod' => $_POST['reproduction'],
                 'dimorph' => $_POST['dimorphisme'],
                 'dispo' => $_POST['dispo'],
                 'prix' => $_POST['prix'],
                 'image' => $_POST['image'],
                 'tailleaqua' => $_POST['litrageaqua'],
                 'facilite' => $_POST['maintenance'],
                 'quantite' => $_POST['quantite'],
                 'typeeau' => $_POST['typeeau'],
                 ));
        ?>
        
    </body>
</html>

