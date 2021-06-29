<?php
    
    class Admin extends Utilisateur{
        protected $ban;
        
        public function getNom(){
            return strtoupper($this->user_name);
        }
        
        public function setBan($b){
            $this->ban[] .= $b;
        }
        public function getBan(){
            echo 'Utilisateurs bannis par '.$this->user_name. ' : ';
            foreach($this->ban as $valeur){
                echo $valeur .', ';
            }
        }
    }
?>