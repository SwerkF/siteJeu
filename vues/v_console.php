<div class="page">
    <div class="container">
        <style>
            .card{ 
                width: 400px;
                height: 400px;
                background-image: url(includes/imgs/Bloc.png);
                background-repeat: no-repeat;
                background-size: cover;
                margin-top: 50px;
             }
             .card2{ 
                width: 1920px;
                height: 1080px;
                background-image: url(includes/imgs/back3.png);
                background-repeat: no-repeat;
                background-size: cover;
                margin-top: 725px
             }
             .titre{
                color: #f5f5f5;
                font-size: 3.5em !important;
                text-shadow: 0.05em 0 rgb(0, 0, 0), -0.05em 0 rgb(0, 0, 0), 0 0.05em rgb(0, 0, 0), 0 -0.05em rgb(0, 0, 0),
                0.05em 0.05em rgb(0, 0, 0), -0.05em -0.05em rgb(0, 0, 0), 0.05em -0.05em rgb(0, 0, 0), -0.05em 0.05em rgb(0, 0, 0);
                margin-top: 310px
             }
        </style>
        <div class="row text-center">
            <h1 class="titre">Bienvenue sur la page des Consoles</h1>
            <?php
                if(isset($_SESSION['id'])) {
                    if($_SESSION['id'] == 1) {
                        ?>
                        <a class="btn btn-primary" href="index.php?uc=console&action=insert" style="position: absolute !important; width: 300px; transform: translate(165%, 900%); font-size: 25px; background-color: green;">Insérer une console</a>
                        <?php
                    }    
                  }
            ?>
        </div>
    </div>
    <div class="card2">
        <div class="container">
            <?php
                $count = 0;
                foreach ( $consoles as $console ) {
                    if($count == 0) {
                        echo "<div class='row text-center align-items-center'>";
                    }
                    echo "<div class='col-4'>";
                        echo "<div class='card'>";
                            echo "<div class='img-jeu'>";
                                echo "<img src='includes/imgs/img_console/".$console['image']."'  style='width:100%; height:100%; object-fit:cover; margin-left:auto; margin-right:auto; margin-top: 20px' alt=''>";
                            echo "</div>";
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title' style='font-size: 40px; text-decoration: underline; font-weight: bold;'>".$console['libelle']."</h5>";
                                echo "<h5 class='card-title' style='font-size: 40px;'>🎨 : ".$console['couleur']."</h5>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    $count++;

                };
            ?> 
        </div>
    </div>
</div>
</body>
<script type="text/javascript">document.addEventListener('DOMContentLoaded', function GetFavColor() {
        document.body.style.backgroundImage = "url('includes/imgs/back2.jpg')"
        document.body.style.backgroundRepeat = "no-repeat";     
        
        document.body.style.backgroundSize = "1920px, 1080px";  
});
</script>