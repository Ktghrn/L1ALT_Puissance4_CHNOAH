<?php

    class Maison {
        //Ici mes identifiants 
        private $fenetre; 
        protected $porte; 
        public $piece;
        public $toilette;

        //Et mes méthodes 
        public function ouvrirFenetre()
        {
            return 'fenêtre ouverte';
        }
        protected function ouvrirPorte()
        {
            return 'Porte ouverte'; 
        }
        private function compterPieces()
        {
            return 'Il y a quelques pieces';
        }
        public function ouvrirToilette()
        {
            return 'chien sortis';
        }
    
    }

    // J'instancie mes objets 
    $maisonDeMichel = new Maison();
    $maisonDeAndre = new Maison();

?>


<?php

    class humain {
        //Ici mes identifiants 
        private $tete; 
        protected $bras; 
        public $jambes;

        //Et mes méthodes 
        public function baisserTete()
        {
            return ' Tete baissée';
        }
        public function leverBras()
        {
            return 'Bras levé'; 
        }
        public function tendreJambes()
        {
            return 'Les jambes sont tendus';
        }
    }

    // J'instancie mes objets 
    $humainCharles = new humain();
    $humainPierre = new humain();

    $humainCharles -> baisserTete(); 

    echo $humainCharles -> baisserTete();
    echo $humainCharles -> leverBras();
    echo $humainCharles -> tendreJambes();

?>

<?php


   spl_autoload_register(function($class_name){
       require './CLASS/' . $class_name . '.php';
    });

    
   

    // J'instancie mes objets pour créer mes personnages 
    $perso1 = new Personnage(100, 20, 5);
    $perso2 = new Personnage(50, 40, 12);
    
    
    // J'attaque le personnage 2 avec le personnage 1
    $perso2->attaquer($perso1);


    // J'affiche les points de vie du personnage 1
    echo $perso1->afficher_points_de_vie();

    //Créer une espace 
    echo '<br>';

    // J'affiche les points de vie du personnage 2
    echo $perso2->afficher_points_de_vie();

?>



