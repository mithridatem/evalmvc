<?php
    //connexion à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=ticket', 'admin','Azerty77', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>