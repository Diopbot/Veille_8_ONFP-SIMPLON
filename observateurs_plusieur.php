<?php
$o = new Observee;

$o->attach(new Observer1)
  ->attach(new Observer2)
  ->attach(new Observer3)
  ->attach(new Observer4)
  ->attach(new Observer5);

$o->setNom('Victor'); // On modifie le nom pour voir si les classes observatrices ont bien été notifiées.