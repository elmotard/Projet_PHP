<?php

	$PDO_BDD = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE,DB_USERNAME,DB_PASSWORD);
	
    try
    {
        $requete = $PDO_BDD->query('select CAT_DESCRIPTION, CAT_ILLUSTRATION, CAT_LABEL FROM t_categorie_cat');
    }
    catch (Exception $e)
    {
        die ('<div style="font-weight:bold; font-color:red">Erreur : '.$e->getMessage().'</div>');
    }
    
	
?>