<?php

try
{
    $bdd = new PDO
    (
        'mysql:host=localhost8889; bdname=Plomberie; charset=UTF8',
        'root',
        'root'
    );
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
