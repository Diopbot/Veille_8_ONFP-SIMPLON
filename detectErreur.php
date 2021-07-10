//préparation de la requête et des variables
  $sql = "INSERT INTO matable (champ1,champ2)   VALUES (:valeur1,:autrevaleur)";

  $datas = array(':valeur1'=>$valeur1, ':autrevaleur'=>$toto);

//Execution de la requete
  try{
  $requete = $bdd -> prepare($sql) ;
  $requete->execute($datas) ;
  }catch(Exception $e){
  // en cas d'erreur :
   echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
  }