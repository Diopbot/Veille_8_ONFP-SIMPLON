<?php
$o = new ErrorHandler; // Nous créons un nouveau gestionnaire d'erreur.
$db = PDOFactory::getMysqlConnexion();

$o->attach(new MailSender('login@fai.tld'))
  ->attach(new BDDWriter($db));

set_error_handler([$o, 'error']); // Ce sera par la méthode error() de la classe ErrorHandler que les erreurs doivent être traitées.

5 / 0; // Générons une erreur