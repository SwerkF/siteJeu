<div class="page">
    <div class="container">
        <style>
            .card{ 
                width: 1300px;
                height: 700px;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #6B8E23;
                margin-top: 150px;
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
        </div>
    </div>
    <div class="card2">
        <div class="container">
        <div class='row align-items-center'>
            <div class='card'>
            <form  method="POST" action="index.php?uc=console&action=ajout" enctype='multipart/form-data'>
                <div class='row' style="margin-top:100px">
                    <div class='col'>
                        <span style='font-size:30px; color: white; text-shadow: 0.05em 0 rgb(0, 0, 0), -0.05em 0 rgb(0, 0, 0), 0 0.05em rgb(0, 0, 0), 0 -0.05em rgb(0, 0, 0),
                        0.05em 0.05em rgb(0, 0, 0), -0.05em -0.05em rgb(0, 0, 0), 0.05em -0.05em rgb(0, 0, 0), -0.05em 0.05em rgb(0, 0, 0); margin-left: 250px'>Nom de la Console : </span>
                    </div>
                    <div class='col'>
                        <input name='nom' style='width: 300px;'>
                    </div>
                </div>
                <div class='row' style="margin-top:50px">
                    <div class='col'>
                        <span style='font-size:30px; color: white; text-shadow: 0.05em 0 rgb(0, 0, 0), -0.05em 0 rgb(0, 0, 0), 0 0.05em rgb(0, 0, 0), 0 -0.05em rgb(0, 0, 0),
                        0.05em 0.05em rgb(0, 0, 0), -0.05em -0.05em rgb(0, 0, 0), 0.05em -0.05em rgb(0, 0, 0), -0.05em 0.05em rgb(0, 0, 0); margin-left: 250px'>Marque de la Console : </span>
                    </div>
                    <div class='col'>
                    <select id="console" name="console" style="width: 300px; height: 35px">
                            <?php
                            foreach($marques as $marque) {
                                echo '<option value="'.$marque['id'].'" style="width: 300px;">'.$marque['libelle'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class='row' style="margin-top:100px">
                    <div class='col'>
                        <span style='font-size:30px; color: white; text-shadow: 0.05em 0 rgb(0, 0, 0), -0.05em 0 rgb(0, 0, 0), 0 0.05em rgb(0, 0, 0), 0 -0.05em rgb(0, 0, 0),
                        0.05em 0.05em rgb(0, 0, 0), -0.05em -0.05em rgb(0, 0, 0), 0.05em -0.05em rgb(0, 0, 0), -0.05em 0.05em rgb(0, 0, 0); margin-left: 250px'>Image de la Console : </span>
                    </div>
                    <div class='col'>
                        <input type="file" name="photo" id="photo" style='width: 300px; '>
                    </div>
                </div>
                <div class='row' style="margin-top:50px">
                    <div class='col'>
                        <span style='font-size:30px; color: white; text-shadow: 0.05em 0 rgb(0, 0, 0), -0.05em 0 rgb(0, 0, 0), 0 0.05em rgb(0, 0, 0), 0 -0.05em rgb(0, 0, 0),
                        0.05em 0.05em rgb(0, 0, 0), -0.05em -0.05em rgb(0, 0, 0), 0.05em -0.05em rgb(0, 0, 0), -0.05em 0.05em rgb(0, 0, 0); margin-left: 250px'>Couleur de la Console : </span>
                    </div>
                    <div class='col' >
                        <input name='couleur' style='width: 300px; '>
                    </div>
                </div>
                <button class="btn btn-primary" style="position: absolute !important; width: 300px; margin-top: 80px; margin-left: 450px;font-size: 25px; background-color: green; padding-top: 15px" type="submit">Ajouter</button>
                </form>
            </div>
        </div>
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