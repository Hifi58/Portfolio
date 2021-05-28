<?php
session_start();
require("fonction/hote.php");
if(!isconnected()){
   header("location: sign_in.php");
exit(); 
}
require_once('connexion.php');

$id = $_POST['id_projet'];

$bdd->exec("DELETE FROM projets WHERE id_projet = $id ");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Suppression effectué');
 window.location.href='administrator.php';
 </script>");