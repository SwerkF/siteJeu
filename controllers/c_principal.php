<?php
if (!isset($_REQUEST['uc'])) {
    $uc = "accueil" ;
}
else {
    $uc = $_REQUEST['uc'] ;
}

switch ($uc)
{
    case 'accueil' : {  include "c_accueil.php" ; break ;
    }
    case 'login' : { include "c_auth.php"; break ; 
    }
    case 'games' : { include "c_games.php"; break ; 
    }
    case 'console' : { include "c_console.php"; break ; 
    }
}

?>


