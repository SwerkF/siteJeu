<?php

if (!isset($_REQUEST['action']))
	$action = "afficher" ;
else
	$action = $_REQUEST['action'] ;


switch ($action)
{
	case "afficher" : {
        $marques = getmarques(); 
        $etats = getetats(); 
        require "vues/v_marques&etats.php" ;
        break ;
    };

}
?>