<?php
    class Produit{
        use Inventaire;
        protected $nom;
        
        public function __construct($n, $nb){
            $this->nom = $n;
            $this->nombre = $nb;
        }
        
        public function getNom(){
            echo $this->nom;
        }

        //D'autres méthodes...
    }
?>