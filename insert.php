<?php

session_start();
require("fonction/hote.php");
if(!isconnected()){
   header("location: sign_in.php");
exit(); 
}
require_once('connexion.php');

$nom=addslashes(htmlspecialchars($_POST['nom_projet']));
$image=htmlspecialchars($_POST['photo']);
$description=addslashes(htmlspecialchars($_POST['bio']));
$lien=addslashes(htmlspecialchars($_POST['lien']));
$github=addslashes(htmlspecialchars($_POST['github']));
$visible=htmlspecialchars($_POST['visible']);

$bdd->exec("INSERT INTO projets (nom_projet, photo, bio, lien, github, visible) VALUE('$nom','$image','$description','$lien','$github', '$visible') ");


echo ("<script LANGUAGE='JavaScript'>
window.alert('Ajout effectué');
 window.location.href='administrator.php';
 </script>");



