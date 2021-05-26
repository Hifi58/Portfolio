<?php

require_once('connexion.php');

$nom=htmlspecialchars($_POST['nom_projet']);
$image=htmlspecialchars($_POST['photo']);
$description=htmlspecialchars($_POST['bio']);

$bdd->exec("INSERT INTO projets (nom_projet, photo, bio) VALUE('$nom','$image','$description')");

echo "ok";



