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
    case 'marques' : { include "c_marques&etats.php"; break ; 
    }
}

?>


