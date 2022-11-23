<div class="page">
    <div class="container">
        <div class="row text-center align-items-center">
            <?php
            if(isset($_SESSION['error'])) { 
                if($_SESSION['error'] == "login_error") {
                    echo "<div class='col-12'><h1 class='big-2'>Login ou mot de passe incorrect.</h1></div>";
                    unset($_SESSION['error']);
                }
            } else {

            }
                
            ?>
            <div class="col-12">
                <form method="POST" name="login" action="index.php?uc=login&action=verif" >
                    <input type="email" name="email"  placeholder="Email">
                    <input type="password" name="pass" placeholder="Mot de passe">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
