<?php


class Maison {

/* Ici mes attributs */
private $fenetre;
protected $porte;
public $piece;

// Et mes methodes
public function ouvrirFenetre()
{
  return "Fenêtre ouverte";
}

public function aTable()
{
  return "Mets la table!";
}


protected function ouvrirPorte()
{
  return "porte ouverte";
}

private function compterPieces()
{
  return "Il y a quelques pieces";
}

}



// j'instencie mes objets
$maisonDeMichel = new Maison();
$maisonDeAnnie = new Maison();

$maisonDeKevin = new Maison();

$maisonDeMichel->ouvrirFenetre();
//$maisonDeAnnie->ouvrirPorte();// ici la function est protected -- permit ?
echo $maisonDeKevin->aTable();


