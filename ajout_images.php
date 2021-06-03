<?php
    $nomimage = $_FILES['image_photo']['name'];
    $filesparam = pathinfo($nomimage);
    $filesextent = $filesparam['extension'];
    $autoriseextent = array("jpeg","jpg","png");
    $filesdestination = "images/";

    if(!(in_array($filesextent, $autoriseextent)))
    {
        echo "extension non autorisée";
    }
    elseif($_FILES['image_photo']['size']>= 100000)
    {
        echo "fichier trop lourd";
    }
    else
    {

        if(move_uploaded_file($_FILES['image_photo']['tmp_name'], $filesdestination.$nomimage)){
            echo "l'image a été envoyé";
        }
        else
        {
         echo "une erreur est survenue";
        }
    }