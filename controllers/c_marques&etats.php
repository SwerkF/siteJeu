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
    case "insert" : {
        require "vues/v_ajoutermarques&etats.php" ;
        break ;

    };
    case "ajoutmarque" :{
        
        $marques = getmarques(); 
        $etats = getetats();
        $nom=$_POST['name'];
        ajoutmarque($nom);
        require "vues/v_marques&etats.php" ;
        break;
    };
    case "ajoutetat" :{
        
        $marques = getmarques(); 
        $etats = getetats();
        $nom=$_POST['name'];
        ajoutetat($nom);
        require "vues/v_marques&etats.php" ;
        break;
    }
}
?>