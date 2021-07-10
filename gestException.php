<?php
function additionner($a, $b)
{
  if (!is_numeric($a) || !is_numeric($b))
  {
    throw new Exception('Les deux paramètres doivent être des nombres'); // On lance une nouvelle exception si l'un des deux paramètres n'est pas un nombre.
  }
  
  return $a + $b;
}

try // On va essayer d'effectuer les instructions situées dans ce bloc.
{
  echo additionner(12, 3), '<br />';
  echo additionner('azerty', 54), '<br />';
  echo additionner(4, 8);
}

catch (Exception $e) // On va attraper les exceptions "Exception" s'il y en a une qui est levée.
{

}
?>