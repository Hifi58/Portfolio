<?php

require_once('connexion.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" href="images/icones/logo.gif" />
    <title>Tony Gillet</title>
</head>
<body>

<!----------------------------------

Header

----------------------------------->

    <header>
        <div class ="containersocial">
            <div class="wrappersocial">
                <a href="https://www.linkedin.com/in/tony-gillet-5a035a1a8/"><img class="socialmedia" src="images/icones/linkedin.png"></a>
                <a href="https://github.com/Hifi58"><img class="socialmedia" src="images/icones/github.png"></a>
                <a href="#"><img class="socialmedia" src="images/icones/insta.png"></a>
            </div>
        </div>
    </header>

<!----------------------------------

About

----------------------------------->

   <section class="about" id="section">
        <div class="containerabout">
            <div class="titleabout">
                <h1 class="titletony">Tony Gillet,<br/> développeur Web / Web mobile Fullstack</h1>
                <p class="titledescrip">Je m'appelle Tony Gillet, <br/>je suis actuellement en formation de développeur Web & Web mobile. </p>
                <div class="pic">
                
                </div>
            </div>
        </div>
   </section>


<!----------------------------------

Work

----------------------------------->
<section class="work" id="section1" > 
    
            <div class="titlework">
                <h1 class="titleproject">Mes projets</h1> 
            </div>
    
<?php
$sql = "SELECT * FROM projets WHERE visible='oui' ORDER BY id_projet DESC";
$rs = $bdd->prepare($sql);
$rs->execute();

while($data=$rs->fetch()){
?>

       <div class="containerwork" >
                <div class="containercard">
                    <div class="card" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="movimg">
                        <img class="imgwork" src='images/<?php echo $data['photo'];?>'>
                         </div>
                         <div class="content">
                            <p><?php echo $data['bio'];?><br></p>
                            <button class="boutonwork"><a href="<?php echo $data['lien'];?>">Visiter</a></button>
                        </div>
        </div>
<?php
};
?>

                    
                </div>
           </div>
   </section>

<!----------------------------------

Skills

----------------------------------->

   <section class="skills" id="section2">
        <div class="containerskills" data-aos="zoom-in" data-aos-duration="2000">
            <div class="titleskills">
                <h1 class="titlescomp">Mes compétences</h1>
                <div class="imgskills">
                    <img src="images/icones/html-5.png"/>
                    <img src="images/icones/css.png"/>
                    <img src="images/icones/javascript.png"/>
                    <img src="images/icones/sass.png"/>
                    <img src="images/icones/php.png"/>
                    <img src="images/icones/mysql.png"/>
                    <img src="images/icones/github.png"/>
                </div>
            </div>
        </div>
   </section>


<!----------------------------------

Contact

----------------------------------->

   <section class="contact" id="section3">
        <div class="containercontact">
            <div class="titlecontact" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-offset="300">
                <h1 class="titleform">Me contacter</h1>

                <form action="mail.php" method="POST">

                <input type="text" placeholder="Votre nom" name="name" required><br/>
                <input type="text" placeholder="Votre E-mail" name="email" required><br/>
                <textarea class="message" type="text" size="50" rows="3" cols="40" placeholder="Écrivez votre texte ici..." name="message" required></textarea><br>
                <button type="submit" value="envoyer">Envoyer</button>
                </form>
            </div>
        </div>  
   </section>

<button class="admin"><a class="lienadmin" href="sign_in.php">Admin</a></button>
  
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
    AOS.init();
  </script>
</body>
</html>