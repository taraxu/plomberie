<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>monplombierbienaime</title>
    <meta name="keywords" content="plombier, lille, aménagement, salle de bain, cuisine, dépaneur, fuite d'eau, nord, chauffage, installation, cumulus, VMC" />
    <meta name="description"  content="dépanage plomberie et aménagement salle de bain et cuisine" />
    <meta name="robots" content="index,follow" />
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="instructions/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!--<base href="localhost:8888/projet/index.php">!-->
</head>

<body>
    <header>        
        <div id="logo">
            <img src="instructions/logo4.png" alt="logo">
            <p>Mon plombier bien aimé</p>
        </div>
        <nav>       
            <a href="#">Accueil</a>
            <a href="#services">Nos services</a>
            <a href="#chantiers">Nos chantiers</a>
            <a href="#contacts">Nous contacter</a>   
        </nav>
        <div id="fa-bars"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></div>
        <div id="dropMenu">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#services">Nos services</a></li>
                <li><a href="#chantiers">Nos chantiers</a></li>
                <li><a href="#contacts">Nous contacter</a></li>
            </ul>
        </div>
        <div class="generalinfo">
            <!--<p>Devis gratuit</p>
            <p>Par tél : 01 23 45 67 89</p>!-->
        </div>
    </header>
    <main  class="maincontent">
        <div class="floatIcon">
            <a href="#contacts"><i class="fa fa-commenting-o fa-3x" aria-hidden="true"></i>
            <p>Envoyer un message</p>
            </a>
        </div>
        <div>
        	<!-- sliders!-->
            <h2 id="chantiers">- Nos <span>Chantiers</span>-</h2>
            <section>
                <div id='hideAera'>
                    <p id="stop"><i class="fa fa-pause-circle-o fa-4x" aria-hidden="true"></i></p>
                    <p id="start"><i class="fa fa-play-circle-o fa-4x" aria-hidden="true"></i></p>
                </div>
                <div id="slider">
                    <ul class="sliderDetail">
                        <li class="sliderImg"><img src="instructions/slider1.jpg" alt="slider1"></li>
                        <li class="sliderImg"><img src="instructions/slider2.jpg" alt="slider2"></li>
                        <li class="sliderImg"><img src="instructions/slider3.jpg" alt="slider3"></li>
                    </ul>
                </div>          
            </section>
            <!-- flex !-->
            <h2 id="services">-Nos <span>Services</span>-</h2>
        	<section class="nosservices">
                <div class="service">
                    <img src="instructions/service111.png">
                    <h3>Plomberie</h3>
                    <ul>
                		<li>Dépannage plomberie</li>
                		<li>Aménagement salle de bain et cuisine</li>
                		<li>Traitement d'eau</li>
                    </ul>
                </div>
                <div class="service">
                    <img src="instructions/service22.png">
                    <h3>Chauffage</h3>
                    <ul>
                        <li>Installation et remplacement de chaudière</li>
                        <li>Installation de chauffage central(radiateur et plancher chauffant)</li>
                    </ul>
                </div>
                <div class="service">
                    <img src="instructions/service33.png">
                    <h3>VMC</h3>
                    <ul>
                        <li>Ventilation(double flux)</li>
                        <li>Traitement d'air</li>
                        <li>Climatisation</li>
                    </ul>
                </div>		
        	</section>
        	<!-- contact !-->
            <h2 id="contacts">-Nous <span>contacter</span>-</h2>
            <section id="contactform">
                <form action="index.php" method="post" <form method="post" action="page.php" enctype="multipart/form-data">
> 
                    <input type="text" name="firstname" placeholder="Prénom" required>
                    <input type="text" name="lastname" placeholder="Nom" required>
                    <input type="text" name="zipcode" placeholder="Code postal" pattern="[0-9]{5}"required>
                    <input type="mail" name="mail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$" required>
                    <textarea cols="80" rows="10" name="content" placeholder="Message" required></textarea>
                    Souhaitez-vous nous faire parvenir une photo ?<input type="file" name="picture"> 
                    <input id="send" type="submit" value="Envoyer">
                    <input id= "delete" type="submit" value="Effacer">
                </form>


                <?php
                try
                {
                    $bdd = new PDO('mysql:host=localhost;dbname=Plomberie;charset=utf8', 'root', 'root');
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
                    if(count($_POST) >0 ) {
                        //var_dump($_POST);

                        //Traiter le formulaire...

                        //inserer les infos dans la table "writers" pour générer la "writer_id "
                        if (is_array($_POST)) {
                            $result3 = $bdd->prepare('INSERT INTO writers (firstname, lastname, zipcode, mail) VALUES(?, ?, ?, ?)');
                            $donnes3 = $result3->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['zipcode'], $_POST['mail']));

                            //var_dump($donnes3);


                        //Capter la "writer_id"
                            $mail = $_POST['mail'];
                            $result2 = $bdd->prepare("SELECT writer_id FROM writers WHERE mail = '$mail'");
                            //var_dump($mail);
                            $result2->execute();
                            $donnes2 = $result2->fetch();
                            //var_dump($donnes2);

                            foreach ($donnes2 as $k => $v){
                               // echo $v;
                            }
                            $writer_idvalue = intval($v);
                            //var_dump($writer_idvalue);

                        //inserer les infos dans la table "messages" avec la "writer_id"
                            $result = $bdd->prepare('INSERT INTO messages (content, writer_id) VALUES(?, ?)');
                            $donnes = $result->execute(array($_POST['content'], $writer_idvalue));

                            //var_dump($writer_idvalue);
                            //var_dump($_POST['content']);
                            //var_dump($donnes);


                            //header('Location: ./');
                       }
                    }
                ?>
                <div id="googlemap">
                    <h4>Mon plombier bien aimé</h4>
                    <p>Sur la metropolilloise</p>
                    <h4>Devis gratuit</h4>
                    <p><a href="tel:+33668964817"><i class="fa fa-mobile" aria-hidden="true"></i><button>06 68 96 48 17</button></a>
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80985.23059984011!2d2.977120874675211!3d50.631046507693576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d579b3256e11%3A0x40af13e81646360!2sLille!5e0!3m2!1sfr!2sfr!4v1517229394277" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </section>

        </div>
    </main>
    <div id="house"></div>
    <footer>
    	<h5>Mon plombier bien aimé</h5>
    		<h5>Devis gratuit</h5>
    		<h5>Par tél : 01 23 45 67 89</h5>
    </footer>
    <script type="text/javascript" src="sliders.js"></script>
    <script type="text/javascript" src="jq.js"></script>
</body>
</html>