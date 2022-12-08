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

    case "insert" : {
        $marques = getAllMarques(); 
        require "vues/v_insertConsole.php" ;
        break ;
    };

    case "ajout": {
        
        $nom = $_POST['nom'];
        $console = $_POST['console'];
        $photo = $_FILES['photo']['name'];
        $couleur = $_POST['couleur'];
        InsertConsole($nom, $console, $photo, $couleur);
        if(is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $file_name = $_FILES['photo']['name'];
            $dest="./includes/imgs/img_console/".$file_name;
            move_uploaded_file($_FILES['photo']['tmp_name'], $dest);
        }
        $consoles = getAllConsole(); 
        require "vues/v_console.php" ;
        break ;

    }

}

?>