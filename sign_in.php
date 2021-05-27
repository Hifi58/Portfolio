<?php
session_start();
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
<html></html>
    <body>
        <div class="container mt-5 pt-5 w-25">
             <h2>Page administrateur</h2>
                <form action="login.php" method="POST">
                <fieldset>
                 
                 <div class="form-group mt-3">
                   <input type="text" class="form-control"  placeholder="Login" name="nom" required>
                 </div>
                 
                 <div class="form-group">
                   <input type="password" class="form-control" placeholder="Password" name="mdp" required>
                 </div>

                 <button class="btn btn-primary mt-2 mb-2" type="submit">Valider</button>
               </fieldset>
             </form>
         </div>
    </body>
</html>