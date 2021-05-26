<?php
require_once('connexion.php');

$id = $_GET['id_projet'];

$bdd->exec("DELETE FROM projets WHERE id_projet = $id ");

echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
<div class="toast-body">
  Hello, world! This is a toast message.
  <div class="mt-2 pt-2 border-top">
    <button type="button" class="btn btn-primary btn-sm">Valider</button>
    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Annuler</button>
  </div>
</div>
</div>';