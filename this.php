

<?php
class Personnage
{
  private $_experience = 50;

  public function afficherExperience()
  {
    echo $this->_experience;
  }
}

$perso = new Personnage;
$perso->afficherExperience();

?>