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
    <form action="message.php" method="post">
        <input type="text" name="firstname" placeholder="Prénom" required><br>
        <input type="text" name="lastname" placeholder="Nom" required><br>
        <input type="text" name="zipcode" placeholder="Code postal" pattern="[0-9]{5}"required><br>
        <input type="mail" name="mail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$" required><br>
        <textarea cols="100" rows="4" name="message" placeholder="Message" required></textarea><br>
        <button type="submit" value="envoyer">Envoyer</button>
    </form>
</main>
<footer>
    <h1>Mon plombier bien aimé</h1>
    <p>Devis gratuit</p>
    <p>Par tél : 01 23 45 67 89</p>
</footer>
<script type="text/javascript" src="sliders.js"></script>
</body>
</html>