<?php
abstract class EtreHumain {
  /* Sexe de la personne
   * @var string */
  protected $sexe;
  /* Nom de la personne
   * @var string */
  protected $nom;
  /* La personne fait du sport
   * @abstract */
  abstract function faireDuSport();
   /* Divertit la personne
   @abstract */
  abstract function seDivertir();
  /*Met à jour le nom
   * @param string $nom
   * @return void
   */
  public function  setNom($nom){
    $this->nom = $nom;
  }
   /* Retourne le nom de la personne
   * @param void
   * @return string $nom */
  public function getNom(){
  return $this->nom;
  }
   /* Retourne le sexe de la personne
   * @param void
   * @return string $sexe */
  public function getSexe(){
    return $this->sexe;
  }
}
?>