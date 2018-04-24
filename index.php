<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Plombier Lille Lambersart Lomme</title>
    <meta name="keywords" content="plombier, lille, aménagement, salle de bain, cuisine, dépaneur, fuite d'eau, nord, chauffage, installation, cumulus, VMC ventilation" />
    <meta name="description"  content="recherche de fuite, aménagement salle de bain et cuisine à lille lambersart et lomme" />
    <meta name="robots" content="index,follow" />
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="icon" type="image/x-icon" href="instructions/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div id="menu">
            <div id="logo">
                <ul>
                    <li><img src="instructions/logo.png" alt="logo"></li>
                    <li><span>Sur la métropole lilloise</span></li>
                </ul>
                <ul class="generalinfo">
                    <li>Demandez un devis gratuit</li>
                    <li><i class="fas fa-mobile-alt fa-fw"></i><a href="tel:+33668964817" class="mobile">06 68 96 48 17</a></li>
                    <li><i class="far fa-envelope fa-fw"></i><a href="mailto:monplombierbienaime@gmail.com" class="mail">monplombierbienaime@gmail.com</a></li>
                </ul>
            </div>
            <nav>
                <a href="#">Accueil</a>
                <a href="#services">Nos services</a>
                <a href="#chantiers">Nos chantiers</a>
                <a href="#contacts">Nous contacter</a>
            </nav>
        </div>
        <div id="backgroundimg">
            <div id="postshow-overlay">
                <div id="addres">
                    <h3> Plombier </h3>
                    <h1> Lille Lambersart Lomme</h1>
                    <div id="mouse">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main  class="maincontent">
        <!--<div>!-->
            <!-- Services !-->
            <h2 id="services">- Nos <span>Services</span>-</h2>
            <section id="nosservices">
                <article class="service">
                    <img src="instructions/plombier.jpg" alt="plombier">
                    <h3><span>Plomberie</span></h3>
                    <ul>
                        <li>Dépannage plomberie</li>
                        <li>Aménagement salle de bain et cuisine</li>
                        <li>Traitement d'eau</li>
                    </ul>
                </article>
                <article class="service">
                    <img src="instructions/chauffage.jpg" alt="chauffage">
                    <h3><span>Chauffage</span></h3>
                    <ul>
                        <li>Installation et remplacement de chaudière</li>
                        <li>Installation de chauffage central (radiateur et plancher chauffant)</li>
                    </ul>
                </article>
                <article class="service">
                    <img src="instructions/traitement%20d'air.jpg" alt="traitement d'air">
                    <h3><span>Traitement d'air</span></h3>
                    <ul>
                        <li>Ventilation (double flux)</li>
                        <li>Système Désenfumage</li>
                    </ul>
                </article>
                <article class="service">
                    <img src="instructions/climatisation.jpg" alt="climatisation">
                    <h3><span>Climatisation</span></h3>
                    <ul>
                        <li>Installation de système climatique</li>
                        <li>Climatisation réversible (Chaud/froid)</li>
                    </ul>
                </article>
            </section>

            <!-- sliders!-->
            <h2 id="chantiers">- Nos <span>Chantiers</span>-</h2>
            <section>
                <article id="slider">
                    <div id="slider-overlay">
                        <p id="stop">I I</p>
                        <p id="play"><i class="fas fa-play"></i></p>
                    </div>
                    <ul class="sliderDetail">
                        <li class="sliderImg"><img src="instructions/slid1.jpg" alt="chaudière"></li>
                        <li class="sliderImg"><img src="instructions/slid2.jpg" alt="gaz"></li>
                        <li class="sliderImg"><img src="instructions/slid3.jpg" alt="chauffage sous sol"></li>
                        <li class="sliderImg"><img src="instructions/slid4.jpg" alt="ventilation"></li>
                        <li class="sliderImg"><img src="instructions/slid5.jpg" alt="toilette 1"></li>
                        <li class="sliderImg"><img src="instructions/slid6.jpg" alt="toilette 2"></li>
                        <li class="sliderImg"><img src="instructions/slid7.jpg" alt="toilette 3"></li>
                        <li class="sliderImg"><img src="instructions/slid8.jpg" alt="toilette 4"></li>
                        <li class="sliderImg"><img src="instructions/slid9.jpg" alt="salle de bain"></li>
                    </ul>
                </article>

                <!-- responsive slider version!-->
                <article id="sliderResponsive">
                    <img src="instructions/slid1.jpg" id="fade" alt="Photo du carrousel">
                    <p id="numbertext"></p>
                </article>
            </section>

            <!-- contact !-->
            <h2 id="contacts">- Nous <span>contacter</span>-</h2>
            <section id="contactform">
                <article id="formPart">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <p>Les champs avec * sont obligatoires</p>
                        <input type="text" name="firstname" placeholder="Prénom *" required>
                        <input type="text" name="lastname" placeholder="Nom *" required>
                        <input type="text" name="zipcode" placeholder="Code postal *" pattern="[0-9]{5}" required >
                        <input type="email" name="mail" placeholder="Email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                        <textarea cols="60" rows="10" name="content" placeholder="Message *" required></textarea>
                        <p>Souhaitez-vous nous faire parvenir des photos?</p>
                        <p>Formats acceptés (JPG, PNG ou GIF | taille de chaque photo max 2Mo) :</p>
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" ><!-- 2M de chaque photo !-->
                        <input type="file" name="picture[]">
                        <input type="file" name="picture[]">
                        <input type="file" name="picture[]">
                        <input type="file" name="picture[]">
                        <input id="send" type="submit" name="submit" value="Envoyer">
                    </form>

                    <?php
                    include_once 'inc/sql.php';
                    include_once 'inc/form.php';
                    ?>

                </article>

                <article id="googlemap">
                    <ul>
                        <li><img src="instructions/logo.png" alt="logo"></li>
                        <li><span>Sur la métropole lilloise(Lille, Lambersart, Lomme...)</span></li>
                    </ul>
                    <ul class="generalinfo">
                        <li>Demandez un devis gratuit</li>
                        <li><i class="fas fa-mobile-alt fa-fw"></i><a href="tel:+33668964817" class="mobile">06 68 96 48 17</a></li>
                        <li><i class="far fa-envelope fa-fw"></i><a href="mailto:monplombierbienaime@gmail.com" class="mail">monplombierbienaime@gmail.com</a></li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80985.23059984011!2d2.977120874675211!3d50.631046507693576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d579b3256e11%3A0x40af13e81646360!2sLille!5e0!3m2!1sfr!2sfr!4v1517229394277"  allowfullscreen></iframe>
                </article>
            </section>
        <!--</div>!-->
    </main>
    <script type="text/javascript" src="sliders.js"></script>
    <script type="text/javascript" src="jq.js"></script>
</body>
</html>