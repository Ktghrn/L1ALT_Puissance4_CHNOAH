<?php
class Character {
 // attrib
  private $pv = 100;
  private $atq = 20;
  private $def = 10;

 //methods
  public function __construct($pv, $atq, $def){

    $this->pv = $pv;
    $this->atq = $atq;
    $this->def = $def;

  }

  // GETTER permet de contourner le PRIVATE

  public function getPv(){
    return $this->pv;
  }

  public function getAtq(){
    return $this->atq;
  }

  public function getDef(){
    return $this->def;
  }

  // SETTER ?? wtf

  public function setPv($pv){
    $this->pv = $pv;
  }

  public function setAtq($atq){
    $this->atq = $atq;
  }

  public function setDef($def){
    $this->def = $def;
  }

  public function attaqueDeFolie(Character $character2) {
    $storePV = $character2->getPv() - ($this->getAtq() - $character2->getDef());

    if ($storePV > $character2->getPv() ){
      return;
    }
    $character2->setPv($storePV);
  // Pv de character2 =  pv de character - (MA force - SA défense)

  }
}


// j'instencie mon perso
$kenken = new Character(100, 10, 5);
$mathysAvecUnY = new Character(50, 40, 10);


//test
$kenken->attaqueDeFolie($mathysAvecUnY);
echo $mathysAvecUnY->getpv();
