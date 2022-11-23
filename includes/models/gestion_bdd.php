<?php

use function PHPSTORM_META\sql_injection_subst;


function verifConnexion($loginSaisi, $mdpSaisi) {
    require "includes/models/connexion.php";
    $req = $bdd->prepare("SELECT id, nom, prenom FROM utilisateur WHERE adresseMail = '$loginSaisi' && mdp = '$mdpSaisi'");
    $req->execute();
    $curseur = $req->fetch();
  return $curseur;
}

function getAllGames() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT jeux.libelle as jeuLib, prix, image as jeuImg, studio, idEtat, console.libelle as consoleLib, etat.libelle as etatLib FROM jeux INNER JOIN etat on idEtat = etat.id INNER JOIN console on idConsole = console.id; ");
  $req->execute();
  $curseur = $req->fetchAll();
  return $curseur;
}

function getGamesByName() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT jeux.libelle as jeuLib, prix, image as jeuImg, studio, idEtat, console.libelle as consoleLib, etat.libelle as etatLib FROM jeux INNER JOIN etat on idEtat = etat.id INNER JOIN console on idConsole = console.id WHERE jeux.libelle LIKE '".$_POST['gamename']."%'; ");
  $req->execute();
  $curseur = $req->fetchAll();
  return $curseur;
}

function getGamesBySupport() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT jeux.libelle as jeuLib, prix, image as jeuImg, studio, idEtat, console.libelle as consoleLib, etat.libelle as etatLib FROM jeux INNER JOIN etat on idEtat = etat.id INNER JOIN console on idConsole = console.id WHERE console.libelle LIKE '".$_POST['gamename']."%'; ");
  $req->execute();
  $curseur = $req->fetchAll();
  return $curseur;
}

?>  