<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="fr">
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
    <div>
        <!-- Services !-->
        <h2 id="services">- Nos <span>Services</span>-</h2>
        <section id="nosservices">
            <div class="service">
                <img src="instructions/plombier.jpg" alt="plombier">
                <h3><span>Plomberie</span></h3>
                <ul>
                    <li>Dépannage plomberie</li>
                    <li>Aménagement salle de bain et cuisine</li>
                    <li>Traitement d'eau</li>
                </ul>
            </div>
            <div class="service">
                <img src="instructions/chauffage.jpg" alt="chauffage">
                <h3><span>Chauffage</span></h3>
                <ul>
                    <li>Installation et remplacement de chaudière</li>
                    <li>Installation de chauffage central (radiateur et plancher chauffant)</li>
                </ul>
            </div>
            <div class="service">
                <img src="instructions/traitement%20d'air.jpg" alt="traitement d'air">
                <h3><span>Traitement d'air</span></h3>
                <ul>
                    <li>Ventilation (double flux)</li>
                    <li>Système Désenfumage</li>
                </ul>
            </div>
            <div class="service">
                <img src="instructions/climatisation.jpg" alt="climatisation">
                <h3><span>Climatisation</span></h3>
                <ul>
                    <li>Installation de système climatique</li>
                    <li>Climatisation réversible (Chaud/froid)</li>
                </ul>
            </div>

        </section>
        <!-- sliders!-->
        <h2 id="chantiers">- Nos <span>Chantiers</span>-</h2>
        <section>
            <div id='hideAera'>
                <p id="stop"><i class="far fa-stop-circle fa-3x"></i></p>
                <p id="start"><i class="far fa-play-circle fa-3x"></i></p>
            </div>
            <div id="slider">
                <ul class="sliderDetail">
                    <li class="sliderImg"><img src="instructions/slid1.jpg" alt="slider1"></li>
                    <li class="sliderImg"><img src="instructions/slid2.jpg" alt="slider2"></li>
                    <li class="sliderImg"><img src="instructions/slid3.jpg" alt="slider3"></li>
                    <li class="sliderImg"><img src="instructions/slid4.jpg" alt="slider4"></li>
                    <li class="sliderImg"><img src="instructions/slid5.jpg" alt="slider5"></li>
                    <li class="sliderImg"><img src="instructions/slid6.jpg" alt="slider6"></li>
                    <li class="sliderImg"><img src="instructions/slid7.jpg" alt="slider7"></li>
                    <li class="sliderImg"><img src="instructions/slid8.jpg" alt="slider8"></li>
                    <li class="sliderImg"><img src="instructions/slid9.jpg" alt="slider9"></li>
                </ul>
            </div>
        </section>
        <!-- contact !-->
        <h2 id="contacts">- Nous <span>contacter</span>-</h2>
        <section id="contactform">
            <div id="formPart">
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
                //connexion of BDD
                try
                {
                    $bdd = new PDO('mysql:host=monplombfbromain.mysql.db;dbname=monplombfbromain;charset=utf8','monplombfbromain','Romain59000');
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }

                /*try
                {
                    $bdd = new PDO('mysql:host=localhost; dbname=Plomberie; charset=utf8', 'root', 'root');
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }*/


                //Form-trait
                if (count($_POST) >0 ) {
                    if (is_array($_POST)) {
                        $mail = $_POST['mail'];
                        $result = $bdd->prepare("SELECT COUNT(firstname) as number FROM writers WHERE mail='$mail'");
                        $result->execute();
                        $donnes = $result->fetch();
                        if ($donnes['number'] == 0) { //new writer
                            //insert all information in writer table and create "writer_id "
                            $result2 = $bdd->prepare('INSERT INTO writers (firstname, lastname, zipcode, mail) VALUES(?, ?, ?, ?)');
                            $donnes2 = $result2->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['zipcode'], $_POST['mail']));
                        } else { //"writer_id exists"
                            //compare zipcode
                            $zipcode = $_POST['zipcode'];
                            $result3 = $bdd->prepare("SELECT COUNT(zipcode) AS zipcodeNumber FROM writers WHERE mail='$mail' AND zipcode='$zipcode' ");
                            $result3->execute();
                            $donnes3 = $result3->fetch();
                            //if zipcode is not the same as register
                            if ($donnes3['zipcodeNumber'] == 0) {
                                //regester or re-regester in zipcode2
                                $result4 = $bdd->prepare("UPDATE writers SET zipcode2 = '$zipcode' WHERE mail = '$mail'");
                                $donnes4 = $result4->execute(array($_POST['zipcode']));
                            }
                        };
                        //Catch "writer_id"
                        $mail = $_POST['mail'];
                        $result5 = $bdd->prepare("SELECT writer_id FROM writers WHERE mail='$mail'");
                        $result5->execute();
                        $donnes5 = $result5->fetch();
                        foreach ($donnes5 as $k => $v) {
                        };
                        $writerID = intval($v);
                        //insert the content in the table "messages" with "writer_id"
                        $result6 = $bdd->prepare('INSERT INTO messages (content, writer_id) VALUES(?, ?)');
                        $result6->execute(array($_POST['content'], $writerID));

                        if (count($_FILES) > 0) {
                            if (isset($_FILES['picture'])) {
                                $files = $_FILES['picture'];
                                foreach ($files['name'] as $i => $fileName) {
                                    $fileError = $files['error'][$i];
                                    $fileTmpName = $files['tmp_name'][$i];
                                    $uploadExtension = strtolower(substr(strrchr($fileName, "."), 1));
                                    $allowExtention = ['jpg', 'jpeg', 'png', 'gif'];
                                    $uniqueName = md5(uniqid(rand(), true)) . '.' . $uploadExtension;
                                    if ($fileError !== 0) {
                                        if ($fileError === UPLOAD_ERR_INI_SIZE) {
                                            $msg = "La totalité des photos envoyée est trop volumineuse";
                                        } elseif ($fileError === UPLOAD_ERR_FORM_SIZE) {
                                            $msg = $fileName . " est trop volumineux";
                                        } elseif ($fileError === UPLOAD_ERR_PARTIAL) {
                                            $msg = "Envoie de la photo " . $fileName . " n'est pas réussie";
                                        } elseif ($fileError === UPLOAD_ERR_EXTENSION) {
                                            $msg = "Le format du fichier n'est pas adapté";
                                        } elseif ($fileError === UPLOAD_ERR_NO_FILE) {
                                            $msg = "";
                                        }
                                    } else {
                                        if (in_array($uploadExtension, $allowExtention)) {
                                            $uploadFile = move_uploaded_file($fileTmpName, 'upload/' . $uniqueName);
                                            $msg = $fileName . " est bien envoyé";
                                            $result7 = $bdd->prepare('INSERT INTO photos (photo_name, writer_id) VALUES(?, ?)');
                                            $result7->execute(array($uniqueName, $writerID));
                                        } else {
                                            $msg = "Le format de la photo " . $fileName . " n'est pas autorisé";
                                        }
                                    }
                                    echo "<p>" . $msg . "</p>";

                                }
                            }
                        }
                    }
                }

                if(isset($_POST['submit'])){
                    if(!empty($uploadFile)){
                        $mailMsg = 'Vous avez reçu un nouveau message de: ' . "\n"
                            . 'Prénom: ' . $_POST['firstname'] . "\n"
                            . 'Nom: ' . $_POST['lastname'] . "\n"
                            . 'Email: ' . $_POST['mail'] . "\n"
                            . 'Photo:' . "oui" . "\n"
                            . 'Message: ' . $_POST['content'] ;
                        mail('yangxumailbox@gmail.com', 'Message du site Mon plombier bien aime', $mailMsg);
                    }else{
                        $mailMsg = 'Vous avez reçu un nouveau message de: ' . "\n"
                            . 'Prénom: ' . $_POST['firstname'] . "\n"
                            . 'Nom: ' . $_POST['lastname'] . "\n"
                            . 'Email: ' . $_POST['mail'] . "\n"
                            . 'Photo:' . "non" . "\n"
                            . 'Message: ' . $_POST['content'] ;
                        mail('yangxumailbox@gmail.com', 'Message du site Mon plombier bien aime', $mailMsg);
                    }
                };
                ?>
            </div>

            <div id="googlemap">
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
            </div>
        </section>
    </div>
</main>
<div id="house"></div>
<script type="text/javascript" src="sliders.js"></script>
<script type="text/javascript" src="jq.js"></script>
</body>
</html>