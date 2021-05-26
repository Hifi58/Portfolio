<?php
require_once('connexion.php');

$id = $_GET['id_projet'];

$bdd->exec("DELETE FROM projets WHERE id_projet = $id ");

var_dump($id);