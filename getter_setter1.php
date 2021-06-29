


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
			
			public function __getAge(){
				return $this->age;
			}
			
			public function __setAge($age){
				$this->age = $age;
			}
	}

	$anna = new Humain(42, 1.42, 75);
	$anna->setAge(25); 
		echo "age de Anna = {$anna->getAge()}";



?>