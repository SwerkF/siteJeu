<div class="page">
    <div class="container">
        <div class="row" style="margin-top: 3em; font-size: 1.2em">
            <div class="col">
                <h2 class="color-white" style="font-size: 3em !important">Affichage des jeux</h2>
                <?php 
                if(isset($_SESSION['id'])) { 
                    if($_SESSION['id'] == 1) { 
                        echo '<a href="index.php?uc=games&action=gestion" class="btn" style="font-size: 1em; background-color:#25CF03">Gestion jeux</a>';
                    }
                }
                ?>
                
            </div>
            <div class="col align-items-end d-flex" style="flex-direction: row-reverse;">
                <form method="POST" action="index.php?uc=games&action=search">
                    <input type="text" name="gamename" style="width: 300px"  placeholder="Mario"><br>
                    <span class="color-white">Par console </span><input type="radio" name="radio" value="m">
                    <span class="color-white">Par nom de jeu </span><input type="radio" name="radio" value="j"><br>
                    <button type="submit">Rechercher</button>
                </form>
            </div>
        </div>
       <br>
        
        <?php
            $count = 0;
            foreach ( $games as $game ) {
 
                if($count == 0) {
                    echo "<div class='row align-items-center'>";
                }
                echo "<div class='col-4'>";
                    echo "<div class='card'>";
                        echo "<div class='img-jeu'>";
                            echo "<img src='includes/imgs/jaquette/".$game['jeuImg']."' style='width:100%; height:100%; object-fit:cover; margin-left:auto; margin-right:auto; margin-top: 20px' width='150' alt=''>";
                        echo "</div>";
                            echo "<div class='card-body' style='bakcground-color: #000; margin-top:10px'>";
                                echo "<h3 class='card-title big-1'><span class='nomjeu' style='padding-right:40%'>".$game['jeuLib']."</span><span class='etatjeu'>".$game['etatLib']."</span></h3>";
                                echo "<span class='card-text big-05'>".$game['studio']." / ".$game['consoleLib']." / ".$game['prix']."€</span>";
                                
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                $count++;

                if($count == 3) {
                    echo "</div><br>";
                    $count = 0;
                }
            };         

        ?>
    </div>
</div>

</body>
<script tyoe="text/javascript">
    document.addEventListener('DOMContentLoaded', function GetFavColor() {

            document.body.style.backgroundImage = "url('includes/imgs/bg1.png')"
            document.body.style.backgroundRepeat = "no-repeat";
            document.body.style.backgroundSize = "cover";
            document.body.style.backgroundAttachment = "fixed";

    });
</script>