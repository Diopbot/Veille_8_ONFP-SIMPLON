
<?php

	/**
	 * 
	 */
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
	}

	$sparrow = new Humain(42, 1.42, 75);
	$sparrow->age =456; // Déclenche une erreur !
		echo "age de Sparrow = $sparrow->age";





?>