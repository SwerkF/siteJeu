
<div class="page">
    <div class="container">
    <style>background-image: url('../imgs/fond.jpg'); background-repeat: no-repeat; background-attachment: fixed;
    background-size: cover; 
    </style>
    <div class="container">
        <div class="row text-center align-items-center" style="margin-top: 40vh;  color: #fff !important">
            <h1>Consultation des marques & états</h1>
            <?php
                if(isset($_SESSION['id'])) {
                    if($_SESSION['id'] == 1) {
                        ?>
                        <a class="btn btn-primary" href="index.php?uc=marques&action=insert" style=" font-size: 25px; background-color: green;">Insérer une console</a>
                        <?php
                    }    
                  }
            ?>

        </div>
        <div class="row align-items-center" style="margin-top: 50vh">
            <div class="col">
                <div class="row align-items-center">
                    
                <?php
            $count = 0;
            foreach ( $marques as $marque ) {
                echo "<div class='row img-translate'>";
                echo "<div class='text1'>";
                echo "<img class='' src='includes/imgs/tuyau2.png' alt='tuyau'>";
                echo $marque['libelle'];
               
                echo "</div>";
                echo "</div>";
                
            };         

        ?>

                </div>
            </div>
            <div class="col">
                <div class="row align-items-center">

                <?php
            $count = 0;
            foreach ( $etats as $etat ) {
                echo "<div class='row img-translate1'>";
                echo "<div class='text2'>";
                echo "<img class='img-translate3' src='includes/imgs/tuyaujaune.png' alt='tuyau'>";
                echo $etat['libelle'];
                echo "</div>";
                echo "</div>";
            };         

        ?>

                </div>
            </div>
        </div>
    </div>
        
    </div>
</div>
</body>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function GetFavColor() {
    document.body.style.backgroundImage = "url('includes/imgs/fond.jpg')"
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundAttachment = "fixed";
});
</script>