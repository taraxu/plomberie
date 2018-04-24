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

?>
