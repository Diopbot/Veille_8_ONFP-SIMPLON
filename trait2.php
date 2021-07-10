<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>

        <?php

            spl_autoload_register(function($classe){
                require 'trait.php/' .$classe. '.trait1.php';
            });
            
            $pierre = new Utilisateur('Pierre', 'abcdef', 'Sud', 5);
            $yeti = new Produit('Yeti', 10);
            
            $pierre->plusUn();
            $yeti->plusUn()->plusUn();
        ?>
        <p>Un paragraphe</p>
    </body>
</html>