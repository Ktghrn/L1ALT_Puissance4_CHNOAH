<?php
class Personnage {
        // Ici mes identifiants 
        public $points_de_vie; // 100 points de vie par défaut
        public $force; // 20 points de force par défaut
        public $defense; // 10 points de défense par défaut

        // Cette fonction fait que le joueur en attaquant un autre joueur lui fait perdre des points de vie en fonction de la force de l'adversaire et de sa défense 
        public function attaquer($cible){ // $cible est un objet de la classe personnage1
            $cible->points_de_vie -= $this->force - $cible->defense; // $this fait référence à l'objet courant
        }
         // On utilise le constructeur pour définir les valeurs par défaut des attributs
         public function __construct($points_de_vie, $force, $defense){
            $this->points_de_vie = $points_de_vie;
            $this->force = $force;
            $this->defense = $defense;
        }
        // Cette fonction permet d'afficher les points de vie après une attaque
        public function afficher_points_de_vie(){ // Cette fonction permet d'afficher les points de vie après une attaque
            echo $this -> points_de_vie; // $this fait référence à l'objet courant 
        }
        
    }
?>