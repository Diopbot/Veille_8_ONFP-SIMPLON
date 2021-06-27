<?php
$mailSender = new class('login@fai.tld') implements SplObserver
{
  protected $mail;
  
  public function __construct($mail)
  {
    if (preg_match('`^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$`', $mail))
    {
      $this->mail = $mail;
    }
  }
  
  public function update(SplSubject $obj)
  {
    mail($this->mail, 'Erreur détectée !', 'Une erreur a été détectée sur le site. Voici les informations de celle-ci : ' . "\n" . $obj->getFormatedError());
  }
};

$db = PDOFactory::getMysqlConnexion();
$dbWriter = new class($db) implements SplObserver
{
  protected $db;
  
  public function __construct(PDO $db)
  {
    $this->db = $db;
  }
  
  public function update(SplSubject $obj)
  {
    $q = $this->db->prepare('INSERT INTO erreurs SET erreur = :erreur');
    $q->bindValue(':erreur', $obj->getFormatedError());
    $q->execute();
  }
};

$o = new ErrorHandler; // Nous créons un nouveau gestionnaire d'erreur.

$o->attach($mailSender)
  ->attach($dbWriter);

set_error_handler([$o, 'error']); // Ce sera par la méthode error() de la classe ErrorHandler que les erreurs doivent être traitées.

5 / 0; // Générons une erreur