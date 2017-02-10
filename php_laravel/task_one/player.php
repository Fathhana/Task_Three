<?php

class Player {
    public $name;
    public $blood;
    public $mana;

    public function __construct($name){
      $this->name = $name;
      $this->blood = 100;
      $this->mana = rand(10,40);
    }

    public function result(){
      echo $this->get_name(). ": mana = ". $this->get_mana(). ", blood=". $this -> get_blood()."\n";
    }

  public function set_name($name){
  $this->name = $name;
  }
  public function get_name(){
    return $this->name;
  }
  public function set_blood($blood){
  $this->blood = $blood;
    }
  public function get_blood(){
    return $this->blood;
  }
  public function set_mana($mana){
  $this->mana = $mana;
    }
  public function get_mana(){
    return $this->mana;
  }

  public function attack_player1(){
    $this->mana -= 10;
  }

  public function attack_player2(){
    $this->mana -= 10;
  }

  public function deffend_player1(){
    $this->blood -= 25;
  }

  public function deffend_player2(){
    $this->blood -= 25;
  }
}

echo '
# ===================================== #
# Welcome to the Battle Arena           #
# ------------------------------------- #
# Description:                          #
# 1 type "enter" to create character    #
# ===================================== #
';

fscanf(STDIN, "%s \n", $jwb);
 if($jwb == "enter") {
    //put first hero name
    echo "Put first hero name ";
    fscanf(STDIN, "%s \n", $name);
    $player = new Player($name);
    echo "Choose position attack or defend:";

    fscanf(STDIN, "%s \n", $posisi1);
    if (strcmp($posisi1, "attack") !== 0 && strcmp($posisi1, "defend") !== 0) {
      echo "choose attack or defend!\n";
      echo "Please try again\n";
      exit;
    } 
    echo "current hero   :";
    print_r($name);
    echo "\nposition       :";
    print_r($posisi1);
    echo "er";
    //put second hero name
    echo "\nPut second hero name ";
    fscanf(STDIN, "%s \n", $name);
    $player2 = new Player($name);
    if ($posisi1 == "attack") {
      $posisi2 = "defend";
    } else {
      $posisi2 = "attack";
    } 
    echo "current hero   :";
    print_r($name);
    echo "\nposition       :";
    print_r($posisi2);
    echo "er";
  } else {
    echo "error! Please type enter to begin \n";
    exit;
  }
  

echo '
# ===================================== #
# Welcome to the Battle Arena           #
# ------------------------------------- #
# Description:                          #
# 1. type "start" to begin the fight    #
# ===================================== #
';
fscanf(STDIN, "%s \n", $jwb);
if($jwb == "start") {
while ($player->get_mana() > 0 && $player->get_blood() > 0){
echo '
# ===================================== #
# Welcome to the Battle Arena           #
# ------------------------------------- #
# ===================================== #
';

if(($posisi1) == "attack" ){
  $player->attack_player1();
} 
if(($posisi1) == "defend" ){
  $player2->attack_player2();
}
if(($posisi2) == "attack" ){
  $player->deffend_player1();
} 
if(($posisi2) == "defend" ){
  $player2->deffend_player2();
}


$player->result();
$player2->result();

  
}
}else{
  echo "Error! Please try again \n";
  exit;
}


?>