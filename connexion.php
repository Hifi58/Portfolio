<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=tonyg_portfolio;charset=utf8', 'tonyg', 'syfd05x88Q7GqA==');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
