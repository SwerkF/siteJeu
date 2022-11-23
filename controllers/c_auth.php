<?php
if (!isset($_REQUEST['action'])) {
    $action = "afficher" ;
}
else {
    $action = $_REQUEST['action'] ;
}

switch ($action)
{
    
    case 'afficher' : {  
        require "vues/v_login.php" ; break ;
    }
    case 'verif' : {
        $login = $_POST['email'];
		$password = $_POST['pass'];
		if(!$login || !$password) {
			$_SESSION['error'] = "login_error";
			require "vues/v_connexion.php";
			break;
		} else {
			$blackList = "(/[]~{}|<>;)";

			if(strpbrk($password,$blackList) && strpbrk($login,$blackList) && strlen($password) > 32 && strlen($login) > 32) {
				$_SESSION['error'] = "login_error";
				require "vues/v_login.php";
				break;
			} else {
				$user = verifConnexion($login,$password);
                var_dump($user);
				if(!$user) { 
				    $_SESSION['error'] = "login_error";
					require "vues/v_login.php";
					break;
				} else {
					$_SESSION['id'] = $user['id'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['prenom'] = $user['prenom'];
					if($user['id'] == 1) {
						$_SESSION['ADMIN'] = true;
					} else {
						$_SESSION['ADMIN'] = false;
					}
					echo "<script>window.location.href='index.php?uc=accueil'</script>";

					unset($_SESSION['error']);
					break;
				}
				
			}
        }
        
    }
    case "deconnexion": {
        unset($_SESSION['id']);
        unset($_SESSION['nom']);
        unset($_SESSION['prenom']);
        unset($_SESSION['ADMIN']);
        echo "<script>window.location.href='index.php?uc=accueil&action=afficher'</script>";
    }
}

?>


