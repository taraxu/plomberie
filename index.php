<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" lang="fr">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>monplombierbienaime</title>
    <!--<base href="localhost:8888/projet/index.php">!-->
</head>

<body>
<header>
    <!-- header ne bouge pas !-->
    <div class="generalinfo">
        <img src="instructions/logo3.png">
        <h1>Mon plombier bien aimé</h1>
        <p>Devis gratuit</p>
        <p>Par tél : 01 23 45 67 89</p>
    </div>
    <nav>
        <!-- click descendre la page!-->
        <a href="#">Accueil</a>
        <a href="#services">Nos services</a>
        <a href="#ateliers">Ateliers</a>
        <a href="#contacts">Contacts</a>
    </nav>
</header>
<main>
	<h2><a href="services.php">Nos Services</a></h2>
	<section class="nosservices">
		<p id="services"></p>
		<div class="service"></div>
		<div class="service"></div>
		<div class="service"></div>
		<div class="service"></div>
		<div class="service"></div>
		<div class="service"></div>		
	</section>

	<h2><a href="ateliers.php">Ateliers</a></h2>
	<section> <!-- sliders!-->
		<div class="slider">
		<img src="" alt="sliders-1">
		<img src="" alt="sliders-2">
		</div>
		<p id="ateliers"></p>
	</section>
    <h2><a href="contacts.php" id="contacts">Contacts</a></h2>
    <form action="index.php" method="post">
        <input type="text" name="firstname" placeholder="Prénom" required><br>
        <input type="text" name="lastname" placeholder="Nom" required><br>
        <input type="text" name="zipcode" placeholder="Code postal" pattern="[0-9]{5}"required><br>
        <input type="mail" name="mail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$" required><br>
        <textarea cols="100" rows="4" name="message" placeholder="Message" required></textarea><br>
        <input type="submit" value="envoyer">
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
            var_dump($_POST);
            //$post = trim($_POST);
            if (is_array($_POST)) {
                $result3 = $bdd->prepare('INSERT INTO writers (firstname, lastname, zipcode, mail) VALUES(?, ?, ?, ?)');
                $result3->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['zipcode'], $_POST['mail']));

                $mail = $_POST['mail'];
                $result2 = $bdd->prepare('SELECT writer_id FROM writers WHERE mail = $mail' );
               // var_dump($mail);
                $result2->execute();
                var_dump($result2);
                $writer_idvalue = $result2->fetch();
                //var_dump($writer_idvalue);

                $result = $bdd->prepare("DECLARE @id as int; set @id = SELECT writer_id FROM writers WHERE mail = $mail INSERT INTO messages (content, writer_id) VALUES(?, @id)");
                $result->execute(array($_POST['content']), $writer_idvalue);

                header('Location: ./');
           }
        }
    ?>



</main>
<footer>
	<h1>Mon plombier bien aimé</h1>
		<p>Devis gratuit</p>
		<p>Par tél : 01 23 45 67 89</p>
</footer>
<script type="text/javascript" src="sliders.js"></script>
</body>
</html>