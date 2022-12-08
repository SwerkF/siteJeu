<?php

use function PHPSTORM_META\sql_injection_subst;


function verifConnexion($loginSaisi, $mdpSaisi) {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT id, nom, prenom FROM utilisateur WHERE adresseMail = '$loginSaisi' && mdp = '$mdpSaisi'");
    $req->execute();
    $curseur = $req->fetch();
  return $curseur;
}

function getAllConsole() {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT id, libelle, idMarque, image, couleur FROM console");
    $req->execute();
    $curseur = $req->fetchAll();
  return $curseur;
}

function getAllMarques() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT id, libelle FROM marque");
  $req->execute();
  $curseur = $req->fetchAll();
return $curseur;
}

function InsertConsole($nom, $console, $photo, $couleur) {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("INSERT INTO console(libelle, idMarque, image, couleur) VALUES ('$nom','$console','$photo','$couleur')");
  $req->execute();
}
?>  