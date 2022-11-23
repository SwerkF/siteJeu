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

}

?>