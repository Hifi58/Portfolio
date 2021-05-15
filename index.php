<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="icon" href="images/logo.gif" /> -->
    <title>Tony Gillet</title>
</head>
<body>


<!----------------------------------

About

----------------------------------->

   <section class="about" >
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

   <section class="work" >
        <div class="containerwork">
            <div class="titlework">
                <h1 class="titleproject">Les projets que j'ai réalisé</h1>
            </div>
        </div>
   </section>

<!----------------------------------

Skills

----------------------------------->

   <section class="skills">
        <div class="containerskills" data-aos="zoom-in">
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

   <section class="contact" >
        <div class="containercontact">
            <div class="titlecontact" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-offset="300">
                <h1 class="titleform">Me contacter</h1>

                <form action="mailto:t.gillet@codeur.online" method="post">

                <input type="text" placeholder="Votre nom"><br/>
                <input type="text" placeholder="Votre E-mail"><br/>
                <input class="message" type="text" placeholder="Écrivez votre message ici..." size="50"><br>
                <button type="submit" value="envoyer">Envoyer</button>
                </form>
            </div>
        </div>
   </section>

  
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
    AOS.init();
  </script>
</body>
</html>