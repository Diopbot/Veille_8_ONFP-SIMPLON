
<?php

	
	class Humain {

		public $age;
		public $taille;
		public $poids;

		
			public function __construct($page, $ptaille,$ppoids)
		{
			$this->age = $page;
			$this->taille = $ptaille;
			$this->poids = $ppoids;
		}
			
			public function __getName(){
				return $this->age;
			}
			
			public function __setName($age, $value){
				$this->$name = $value;
			}
	}

	$anna = new Humain(42, 1.42, 75);
	$anna->age = 25; 
		echo "age de anna = $anna->age". PHP_EOL;
	$anna->taille = 1.42; 
		echo "la taille de anna est $anna->taille";

?>