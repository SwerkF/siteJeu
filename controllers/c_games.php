<?php

if (!isset($_REQUEST['action']))
	$action = "afficher" ;
else
	$action = $_REQUEST['action'] ;


switch ($action)
{
	case "afficher" : {
        $games = getAllGames(); 
        require "vues/v_games.php" ;
        break ;
    };
    case "search" : {
        if($_POST['radio'] == "j") {
            $games = getGamesByName($_POST['gamename']);
            require "vues/v_games.php" ;
            break ;
        } else {
            $games = getGamesBySupport($_POST['gamename']);
            require "vues/v_games.php" ;
            break ;
        }
        
    };
    case "gestion": {
        $games = getAllGames();
        $etats = getAllEtats();
        $consoles = getAllConsoles();
        require "vues/v_games_gestion.php" ;
        break ;
    }

}

?>