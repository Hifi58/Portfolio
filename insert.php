<?php

require_once('connexion.php');

$nom=addslashes(htmlspecialchars($_POST['nom_projet']));
$image=htmlspecialchars($_POST['photo']);
$description=addslashes(htmlspecialchars($_POST['bio']));
$lien=addslashes(htmlspecialchars($_POST['lien']));
$github=addslashes(htmlspecialchars($_POST['github']));

$bdd->exec("INSERT INTO projets (nom_projet, photo, bio, lien, github) VALUE('$nom','$image','$description','$lien','$github') ");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Ajout effectué');
 window.location.href='administrator.php';
 </script>");



