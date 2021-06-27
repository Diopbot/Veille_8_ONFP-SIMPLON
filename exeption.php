<?php  
  try {
    division(1,0);  
  }  
  catch(Exception $e) {  
    echo "Message : " . $e->getMessage();  
    echo "Code : " . $e->getCode();  
  }   
  function division($a, $b) {
    if($b == 0) {  
      throw new Exception("Erreur division par zéro", -1);  
    }else{
      return $a/$b;
    } 
  }  
?>