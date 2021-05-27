<?php
require_once('connexion.php');

$nom=addslashes(htmlspecialchars($_POST['nom_projet']));
$image=htmlspecialchars($_POST['photo']);
$description=addslashes(htmlspecialchars($_POST['bio']));
$lien=addslashes(htmlspecialchars($_POST['lien']));
$github=addslashes(htmlspecialchars($_POST['github']));
$visible=htmlspecialchars($_POST['visible']);
$id = $_POST['id_projet'];

$sql = "UPDATE projets SET  nom_projet = '$nom', photo = '$image', bio = '$description', lien = '$lien', github = '$github', visible = '$visible' WHERE  id_projet = $id";
$rs = $bdd->prepare($sql);
$rs->execute();

echo ("<script LANGUAGE='JavaScript'>
window.alert('Modification effectué');
 window.location.href='administrator.php';
 </script>");