<?php

use function PHPSTORM_META\sql_injection_subst;


function verifConnexion($loginSaisi, $mdpSaisi) {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT id, nom, prenom FROM utilisateur WHERE adresseMail = '$loginSaisi' && mdp = '$mdpSaisi'");
    $req->execute();
    $curseur = $req->fetch();
  return $curseur;
}
function getmarques() {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT * FROM marque");
    $req->execute();
    $curseur = $req->fetchall();
return $curseur;
}
function getetats() {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT * FROM etat");
    $req->execute();
    $curseur = $req->fetchall();
return $curseur;
}
function ajoutmarque($libelle) {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("INSERT INTO marque (libelle) VALUES ('$libelle')");
    $req->execute();
}
function ajoutetat($libelle) {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("INSERT INTO etat (libelle) VALUES ('$libelle')");
    $req->execute();
}

?>  