<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="includes/img/mb.png" width="16" height="16">
    <script src="https://kit.fontawesome.com/b20eb41686.js" crossorigin="anonymous"></script>

    <title>Garage</title>

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/jquery-ui.min.css" rel="stylesheet">
    <link href="includes/css/animate.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">

</head>
<body>
    <?php
    //affichage du menu si l'utilisateur est authentifiÃ©
    if (isset($_SESSION['tl_login']))
    {
        echo '

    <div class="loader"></div>
    <div id="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                   Garage
                </a>
            </li>
            <li>
                <a href="index.php?uc=marque" id="bthome">Marques</a>
            </li>
            <li>
                <a href="index.php?uc=deconnexion" id="admin">Déconnexion</a>
            </li>
        </ul>
    </nav>

    <div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
    </button>
        ' ;
    }
    ?>