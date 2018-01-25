<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="fr">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="instructions/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>monplombierbienaime</title>
    <!--<base href="localhost:8888/projet/index.php">!-->
</head>

<body>
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#services">Nos services</a>
            <a href="#chantiers">Nos chantiers</a>
            <a href="#contacts">Nous contacter</a>
        </nav>
        <div class="generalinfo">
            <img src="instructions/logo3.png">
            <h1>Mon plombier bien aimé</h1>
            <p>Devis gratuit</p>
            <p>Par tél : 01 23 45 67 89</p>
        </div>
    </header>
    <main  class="maincontent">
        <div class="floatIcon">
            <a href="#contacts"><i class="fa fa-commenting-o fa-3x" aria-hidden="true"></i>
            <p>Envoyer un message</p>
            </a>
        </div>
        <div>
        	<h2><a href="services.php" id="services">Nos Services</a></h2>
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
        	<h2><a href="chantiers.php" id="chantiers">Nos Chantiers</a></h2>
        	<section> <!-- sliders!-->
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
            <h2><a href="contacts.php" id="contacts">Nous contacter</a></h2>
            <form action="index.php" method="post">
                <input type="text" name="firstname" placeholder="Prénom" required><br>
                <input type="text" name="lastname" placeholder="Nom" required><br>
                <input type="text" name="zipcode" placeholder="Code postal" pattern="[0-9]{5}"required><br>
                <input type="mail" name="mail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$" required><br>
                <textarea cols="100" rows="4" name="content" placeholder="Message" required></textarea><br>
                <input type="submit" value="Envoyer">
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


        </div>
    </main>
    <footer>
    	<h1>Mon plombier bien aimé</h1>
    		<p>Devis gratuit</p>
    		<p>Par tél : 01 23 45 67 89</p>
    </footer>
    <script type="text/javascript" src="sliders.js"></script>
</body>
</html>