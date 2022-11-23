<div class="page">
    <div class="container">
        <?php
            $count = 0;
            foreach ( $games as $game ) {
                if($count == 0) {
                    echo "<div class='row text-center align-items-center'>";
                }
                echo "<div class='col-4'>";
                    echo "<div class='card'>";
                        echo "<img src='images/".$game['image']."' alt=''>";
                        echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>".$game['fortnite']."</h5>";
                            echo "<p class='card-text'>".$game['description']."</p>";
                            echo "<a href='index.php?uc=games&action=afficher&id=".$game['id']."' class='btn btn-primary'>Voir</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                $count++;

                if($count == 4) {
                    echo "</div>";
                    $count = 0;
                }
            };         

        ?>
    </div>
</div>