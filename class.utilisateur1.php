<?php
    class Utilisateur1 {
        use Inventaire;
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
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
        
        //D'autres méthodes...
    }
?>