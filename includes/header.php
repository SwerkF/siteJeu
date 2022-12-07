<html>

    <head>
        <!-- Links -->
        <link rel="stylesheet" href="includes/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="includes/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 

        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="title" content="Website Title"/>
        <meta name="description" content="Website Description"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
    </head>
    <body>
        <div class="background">
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="./includes/imgs/coin.png" style="width:3em"><span class="navbar-brand big-2" href="#">&nbsp;Coinllection</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                    <a class="nav-link active big-1" href="#">Jeux</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active big-1" href="#">Console</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active big-1" href="index.php?uc=marques&action=afficher">Marques&Etats</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php
                        if(isset($_SESSION['id'])) {
                            echo "<li class='nav-item'>
                                <a class='nav-link active big-1' href='index.php?uc=profil&action=afficher'>Profil</a>
                            </li>";
                            echo "<li class='nav-item'>
                                <a class='nav-link active big-1' href='index.php?uc=login&action=deconnexion'>Déconnexion</a>
                            </li>";
                        } else {
                            echo "<li class='nav-item'><a class='nav-link active big-1' href='index.php?uc=login&action=afficher'>Connexion</a></li>";
                            
                        }
                    ?>
                </ul>
                </div>
            </div>
        </nav>
