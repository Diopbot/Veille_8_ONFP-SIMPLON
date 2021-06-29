<?php
    trait Inventaire{
        protected $nombre;
    
        public function plusUn(){
            $this->nombre++;
            echo $this->nombre. '<br>';
            return $this;
        }
    }
?>