<?php
 

 // Une classe Personne

 class Personne
  {
    public $title;
    public $description;

  }

  // Un objet Personne

  $Personne1 = new Personne ();

  // Un deuxième objet

  $Personne2 = new Personne ();

  // Accès à un objet

  $Personne2 -> title = "Comprendre le développement Back";
  $Personne2 -> description = "Le développement est magnifique";

?>