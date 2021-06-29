          
          <?php
          
          abstract class EtreHumain
          {
            // Attributs et autres méthodes de la classe
            // ...
           
            /**
             * Retourne le nom de la personne
             *
             * @param void
             * @return string $nom
             * @final
             */
            public final function getNom()
            {
              return $this->nom;
            }
           
            /**
             * Retourne le sexe de la personne
             *
             * @param void
             * @return string $sexe
             * @final
             */
            public final function getSexe()
            {
              return $this->sexe;
            }
          }
           
          ?>