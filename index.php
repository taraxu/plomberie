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
  
 
  
    <script type="text/javascript">  
    window.onload = function(){  

        var infoSlider=document.getElementsByClassName('slider'); 
        console.log('pb') ;
        var infoUl=infoSlider.getElementsByTagName('ul')[0];  
        alert('slider'); 
        var infoImage=infoUl.getElementsByTagName('li');  
      
        infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//变成两副图，然后才能实现无缝滚动  
      
        infoUl.style.width=infoImage[0].offsetWidth*infoImage.length+'px';//随便获取一个li的宽度，这里用第一个代表计算出ul的长度  
        setInterval(function(){  
            if(infoUl.offsetLeft<-infoUl.offsetWidth/2){//offsetLeft是负数，而offsetWidth是一个最小大于0的数，所以加个-号才能进行比较  
                infoUl.style.left='0';//当所有图片滚动完之后将left设置为0意味着后面无缝地接着第一张图片，这个过程如果看见两副图片就会看见有些变化，但实际上只会看见一副，所以几乎没有变化  
                alert('slider'); 
             }
            infoUl.style.left=infoUl.offsetLeft-2+'px';//每次向左移动2px  
            
        },50);  


    };
    </script>
</head>

<body>
    <header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#services">Nos services</a>
            <a href="#ateliers">Ateliers</a>
            <a href="#contacts">Contacts</a>
        </nav>
        <div class="generalinfo">
            <img src="instructions/logo3.png">
            <h1>Mon plombier bien aimé</h1>
            <p>Devis gratuit</p>
            <p>Par tél : 01 23 45 67 89</p>
        </div>
    </header>
    <main>
        <div class="floatIcon">
            <a href="#contacts"><i class="fa fa-commenting-o fa-3x" aria-hidden="true"></i>
            <p>Envoyer un message</p>
            </a>
        </div>
        <div class="maincontent">
        	<h2><a href="services.php" id="services">Nos Services</a></h2>
        	<section class="nosservices">
        		<div class="service"></div>
        		<div class="service"></div>
        		<div class="service"></div>
        		<div class="service"></div>
        		<div class="service"></div>
        		<div class="service"></div>		
        	</section>
        	<h2><a href="ateliers.php" id="ateliers">Ateliers</a></h2>
        	<section> <!-- sliders!-->
                <div class="slider">
                    <ul>
                        <li><img src="instructions/slider1.jpg" alt="slider1"></li>
                        <li><img src="instructions/slider2.jpg" alt="slider2"></li>
                        <li><img src="instructions/slider3.jpg" alt="slider3"></li>
                    </ul>
                </div>
                <div class="slider">
                    <ul>
                        <li><img src="instructions/slider1.jpg" alt="slider1"></li>
                        <li><img src="instructions/slider2.jpg" alt="slider2"></li>
                        <li><img src="instructions/slider3.jpg" alt="slider3"></li>
                    </ul>
                </div>
           	</section>
            <h2><a href="contacts.php" id="contacts">Contacts</a></h2>
            <form action="index.php" method="post">
                <input type="text" name="firstname" placeholder="Prénom" required><br>
                <input type="text" name="lastname" placeholder="Nom" required><br>
                <input type="text" name="zipcode" placeholder="Code postal" pattern="[0-9]{5}"required><br>
                <input type="mail" name="mail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$" required><br>
                <textarea cols="100" rows="4" name="content" placeholder="Message" required></textarea><br>
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