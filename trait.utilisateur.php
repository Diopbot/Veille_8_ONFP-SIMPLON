<?php
    class Utilisateur{
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
        protected $nombre;
        public const ABONNEMENT = 15;
        
        public function __construct($n, $p, $r, $nb){
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
            $this->nombre = $nb;
        }
        public function __destruct(){
            //Du code à exécuter
        }
        
        public function getNom(){
            echo $this->user_name;
        }
 
        public function plusUn(){
            $this->nombre++;
            echo $this->nombre. '<br>';
            return $this;
        }
        
        //D'autres méthodes...
    }
?>