<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = 'localhost';
            $dbname = 'pdodb';
            $user = 'root';
            $pass = 'root';
            
            /*On imagine qu'on récupère les valeurs suivantes à partir d'un formulaire envoyé
             *par les utilisateurs*/
            $nom = "Richard";
            $prenom = "Pierre";
            $adresse = "Rue de la Chèvre";
            $ville = "Toulon";
            $cp = 83000;
            $pays = "France";
            $mail = "'gg@gmail.com'),('a','b','c','d',1,'e','f'";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $dbco->beginTransaction();
                
                $sql = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail)
                        VALUES($nom,$prenom,$adresse,$ville,$cp,$pays,$mail)";
                $dbco->exec($sql);

                echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
                $dbco->rollBack();
              echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>