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
function getAllGames() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT jeux.id as idJeu, jeux.libelle as jeuLib, prix, image as jeuImg, studio, idEtat, console.libelle as consoleLib, etat.libelle as etatLib FROM jeux INNER JOIN etat on idEtat = etat.id INNER JOIN console on idConsole = console.id; ");
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

function getAllEtats() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT id, libelle FROM etat");
  $req->execute();
  $curseur = $req->fetchAll();
  return $curseur;
}

function getAllConsoles() {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("SELECT id, libelle FROM console ");
  $req->execute();
  $curseur = $req->fetchAll();
  return $curseur;
}

function insertJeu($libelle, $prix, $image, $studio, $etat, $console) {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("INSERT INTO jeux (libelle, prix, image, studio, idEtat, idConsole) VALUES ('$libelle', '$prix', '$image', '$studio', '$etat', '$console')");
  $req->execute();
}

function deleteJeu($id) {
  require "includes/models/connexion.php";
  $req = $bdd->prepare("DELETE FROM jeux WHERE id = '$id'");
  $req->execute();
}


?>  