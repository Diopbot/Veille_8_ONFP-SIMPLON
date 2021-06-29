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
            $prenom = 'Pierre';
            $x = 4;
            $y = 5;
            
            function bonjour($p){
                echo 'Bonjour ' .$p. '<br>';
            }
            
            function addition($p1, $p2){
                echo $p1. ' + ' .$p2. ' = ' .($p1 + $p2). '<br>';
            }
            
            bonjour($prenom);
            bonjour('Mathilde');
            addition($x, $y);
            addition(1, 1);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>