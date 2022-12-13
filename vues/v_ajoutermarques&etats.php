<div class="page">
    <div class="container">
    <style>background-image: url('../imgs/fond.jpg'); background-repeat: no-repeat; background-attachment: fixed;
    background-size: cover; 
    </style>
    <div class="container">
        <div class="row text-center align-items-center" style="margin-top: 40vh;  color: #fff !important">
            <h1>Ajouter des marques & états</h1>
        </div>
        <div class="row align-items-center text-center justify-content-around"  style="margin-top: 50vh">
            <div class="col-4" style="background-color:#FFD700; border-radius: 28px 28px 28px 28px;color:black; height:200px;padding-top: 20px;">
                <form method="post" action="index.php?uc=marques&action=ajoutmarque">
                    Ajout d'une marque  <label for="name">:</label> <input type="text" id="name" name="name" required minlength="2" maxlength="50" size="10">
                    <br>
                    <br>
                    <button class="btn btn-primary" style=" font-size: 25px; background-color: green !important; ">Confirmer</button>
                </form>
            </div>
            <div class="col-4" style="background-color:#6B8E23; border-radius: 28px 28px 28px 28px;color:white; height : 200px; padding-top:20px;">
                <form method="POST" action="index.php?uc=marques&action=ajoutetat">
                    Ajout d'un état <label for="name">:</label> <input type="text" id="name" name="name" minlength="2" maxlength="50" size="10" required>
                    <br>
                    <br>
                    <button class="btn btn-primary" style=" font-size: 25px; background-color: gold !important; ">Confirmer</button>
                </form>
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