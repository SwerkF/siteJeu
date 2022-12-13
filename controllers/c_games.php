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

    case "ajout": {
        if(isset($_POST['nom']) && isset($_POST['studio']) && isset($_POST['prix']) && isset($_POST['console']) && isset($_POST['etat'])) {
            $nom = $_POST['nom'];
            $studio = $_POST['studio'];
            $prix = $_POST['prix'];
            $console = $_POST['console'];
            $etat = $_POST['etat'];
            $photo = $_FILES['photo']['name'];
            if(is_uploaded_file($_FILES['photo']['tmp_name'])) {
                $file_name = $_FILES['photo']['name'];
                $dest="./includes/imgs/jaquette/".$file_name;
                move_uploaded_file($_FILES['photo']['tmp_name'], $dest);
            }
            insertJeu($nom, $prix, $photo, $studio, $etat, $console);
            header("Location: index.php?uc=games");
        }
        
    }

    case "delete": {
        if(isset($_POST['jeu'])) {
            $id = $_POST['jeu'];
            deleteJeu($id);
            header("Location: index.php?uc=games");
        }
    }

}

?>