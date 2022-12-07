<?php

if (!isset($_REQUEST['action']))
	$action = "afficher" ;
else
	$action = $_REQUEST['action'] ;


switch ($action)
{
	case "afficher" : {
        $consoles = getAllConsole(); 
        require "vues/v_console.php" ;
        break ;
    };

}

?>