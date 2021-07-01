

<?php
if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
   echo "Utilisation de mysql ; fait quelque chose de spécifique à mysql ici\n";
}
?>