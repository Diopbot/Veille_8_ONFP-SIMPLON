<?php
$o = new Observee;
$o->attach(new Observer1); // Ajout d'un observateur.
$o->attach(new Observer2); // Ajout d'un autre observateur.
$o->setNom('Victor'); // On modifie le nom pour voir si les classes observatrices ont bien été notifiées.