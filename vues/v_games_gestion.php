<div class="page">
    <div class="container">
        <div class="row text-center" style="margin-top: 3em; font-size: 1.2em">
            <div class="col">
                <h2 class="color-white" style="font-size: 3em !important">Gestion des jeux</h2>
                
            </div>
            
        </div>
       
        <div class="row justify-content-around align-items-center text-center">

            <div class="col-4" style="border-radius: 28px 28px 28px 28px; background-color: #33ff39; width 40px">
                <h3>Ajouter un jeu</h3>
                <form method="POST" action="index.php?uc=games&action=ajout" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white" style="color:#fff">Nom</p>
                    </div>
                    <div class="col">
                        <input type="text" name="nom" placeholder="Mario" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white">Studio</p>
                    </div>
                    <div class="col">
                        <input type="text" name="studio" placeholder="Studio" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white">Prix</p>
                    </div>
                    <div class="col">
                        <input type="text" name="prix" placeholder="Prix" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white">Console</p>
                    </div>
                    <div class="col">
                        <select id="console" name="console" style="width: 150px">
                            <?php
                            foreach($consoles as $console) {
                                echo '<option value="'.$console['id'].'">'.$console['libelle'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white">Etat</p>
                    </div>
                    <div class="col">
                        <select id="etat" name="etat" style="width: 150px">
                            <?php
                            foreach($etats as $etat) {
                                echo '<option value="'.$etat['id'].'">'.$etat['libelle'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text color-white">Fichier</p>
                    </div>
                    <div class="col">
                        <input type="file" name="photo" id="photo" required><br>
                    </div>
                </div>
                <br>
                    <button type="submit">Ajouter</button>
                </form>

            </div>
            

            <div class="col-4" style="background-color: #ff3333; border-radius: 28px 28px 28px 28px;" >
                <h3>Supprimer un jeu</h3>
                <form method="POST" action="index.php?uc=games&action=delete">
                    <div class="row">
                        <div class="col">
                            <p class="card-text color-white">Nom</p>
                        </div>
                        <div class="col">
                            <select id="jeu" name="jeu">
                                <?php
                                foreach($games as $jeu) {
                                    echo '<option value="'.$jeu['idJeu'].'">'.$jeu['jeuLib'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit">Supprimer</button>
                </form>
            </div>

        </div>
        
        
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