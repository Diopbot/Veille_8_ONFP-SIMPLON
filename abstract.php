<?php  
	abstract class myClasse 
	{ 
		// C'est une fonction abstraite 
		abstract function show(); 
		  
		// Ce n'est pas une fonction abstraite 
		function display() 
		{ 
			echo "Hello World!"; 
		} 
	} 
?>