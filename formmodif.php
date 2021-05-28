<?php
session_start();
require("fonction/hote.php");
if(!isconnected()){
   header("location: sign_in.php");
exit(); 
}
require_once('connexion.php');

$id = $_GET['id_projet'];
$nom=addslashes(htmlspecialchars($_GET['nom_projet']));
$image=htmlspecialchars($_GET['photo']);
$description=addslashes(htmlspecialchars($_GET['bio']));
$lien=addslashes(htmlspecialchars($_GET['lien']));
$github=addslashes(htmlspecialchars($_GET['github']));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Modification</title>
</head>
<body>
    

    
    
    <div class="container mt-4 pt-4 w-25">
             <h2>Modification</h2>
             <form action="update.php" method="POST">
               <fieldset>
                 
                 <div class="form-group mt-3">
                   <input type="text" class="form-control"  placeholder="Nom du projet" name="nom_projet" value="<?php echo $nom ?>" required>
                 </div>
                 
                 <div class="form-group">
                   <input type="file" class="form-control" title ='image' name="photo" value="<?php echo $image ?>" required>
                 </div>
                 
                 <div class="form-group">
                   <input  class="form-control pb-5"  rows="5" name="bio"  value="<?php echo $description ?>" required>
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control"  placeholder="Url du projet" name="lien" value="<?php echo $lien ?>"required>
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control"  placeholder="Url Github du projet" name="github" value="<?php echo $github ?>" required>
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
                    <input type="hidden" name="id_projet" value="<?php echo $id ?>">
                 <button class="btn btn-primary mt-2 mb-2" type="submit">Modifier</button>
               </fieldset>
             </form>
        </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html> 