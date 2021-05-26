<?php

require_once('connexion.php');

$nom=addslashes(htmlspecialchars($_POST['nom_projet']));
$image=htmlspecialchars($_POST['photo']);
$description=addslashes(htmlspecialchars($_POST['bio']));


$bdd->exec("INSERT INTO projets (nom_projet, photo, bio) VALUE('$nom','$image','$description') ");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Ajout effectué');
 window.location.href='administrator.php';
 </script>");



