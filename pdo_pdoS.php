<?php
// La connexion retourne $bdd (une instance PDO)
 
$req = $bdd->query('SELECT * FROM table'); // ici $ bdd est toujours une instance PDO tandis que $req est une instance PDOStatment
 
// En gros PDOStatment est un résultat d'une requête
 
$data = $req->fetch(); // $req est une une instance PDOStatment