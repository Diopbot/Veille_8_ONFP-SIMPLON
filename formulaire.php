<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> reuperation des donnees du formulaire</title>
</head>
<body>

		<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Prénom : '.$_POST["prenom"].'<br>';
            echo 'Email : ' .$_POST["mail"].'<br>';
            echo 'Age : ' .$_POST["age"].'<br>';
            echo 'Sexe : ' .$_POST["sexe"].'<br>';
            echo 'Ville : ' .$_POST["ville"].'<br>';
        ?>
    </body>
</html>

</body>
</html>