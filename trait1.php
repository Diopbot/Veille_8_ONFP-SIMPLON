<?php
    class Produit{
        protected $nom;
        protected $nombre;
        
        public function __construct($n, $nb){
            $this->nom = $n;
            $this->nombre = $nb;
        }
        
        public function getNom(){
            echo $this->nom;
        }
 
        public function plusUn(){
            $this->nombre++;
            echo $this->nombre. '<br>';
            return $this;
        }
        
        //D'autres méthodes...
    }
?>