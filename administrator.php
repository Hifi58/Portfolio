<?php
require_once('connexion.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Page administrateur</title>
</head>

<body>
<hr class="bg-secondary">
<hr class="bg-secondary">
<!-----------------------------

Formulaire d'ajout

------------------------------>

         <div class="container mt-4 pt-4 w-25">
             <h2>Page administrateur</h2>
             <form action="insert.php" method="POST">
               <fieldset>
                 
                 <div class="form-group mt-3">
                   <input type="text" class="form-control"  placeholder="Nom du projet" name="nom_projet" required>
                 </div>
                 
                 <div class="form-group">
                   <input type="file" class="form-control" title ='image' name="photo" required>
                 </div>
                 
                 <div class="form-group">
                   <textarea class="form-control"  rows="3" name="bio" resize="none" required></textarea>
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control "  placeholder="Url du projet" name="lien" required>
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control "  placeholder="Url Github du projet" name="github" required>
                 </div>

                 <div class="form-check">
                  <input class="form-check-input" type="radio" name="visible" value="oui">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Visible
                  </label>
                  </div>

                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="visible" value="non" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Non visible
                  </label>
                  </div>

                 <button class="btn btn-primary mt-2 mb-2" type="submit">Ajouter</button>
               </fieldset>
             </form>
         </div>
<hr class="bg-secondary">
<hr class="bg-secondary">
<!-----------------------------

Liste des projets avec modification et suppression

------------------------------>
<h2 class="container mt-4 w-25">Projet visible</h2>
<?php
$sql = "SELECT * FROM projets WHERE visible='oui' ORDER BY id_projet DESC";
$rs = $bdd->prepare($sql);
$rs->execute();

while($data=$rs->fetch()){
?>

  <div class="container mt-5 w-50">
    <div class="row">
      <h5 class="card-title"><?php echo $data['nom_projet'];?></h5>
      <button class="btn btn-warning ml-2">Modifier</button>
      <button class="btn btn-danger ml-2"><?php echo "<a class='text-white' href= delete.php?id_projet=" . $data['id_projet'] . '>Supprimer</a>'?></button>
      <input type="hidden" name="id_projet" value="<?php echo $id;?>">
    </div>
  </div>



 <?php
 //fermeture While
};
?>

<h2 class="container mt-5  w-25">Projet non visible</h2>
<?php
$sql = "SELECT * FROM projets WHERE visible='non' ORDER BY id_projet DESC";
$rs = $bdd->prepare($sql);
$rs->execute();

while($data=$rs->fetch()){
?>

  <div class="container mt-5 mb-4 w-50">
    <div class="row">
      <h5 class="card-title"><?php echo $data['nom_projet'];?></h5>
      <button class="btn btn-warning ml-2">Modifier</button>
      <button class="btn btn-danger ml-2"><?php echo "<a class='text-white' href= delete.php?id_projet=" . $data['id_projet'] . '>Supprimer</a>'?></button>
      <input type="hidden" name="id_projet" value="<?php echo $id;?>">
    </div>
  </div>



 <?php
 //fermeture While
};
?>
<hr class="bg-secondary">
<hr class="bg-secondary">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>