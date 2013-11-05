<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=aquaservice',"root","");
}

catch(Exception $e)
{
    die('ERREUR'. $e->getMessage());
}

?>
