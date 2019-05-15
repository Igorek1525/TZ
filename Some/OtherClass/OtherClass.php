<?php

class OtherClass { //Главный класс

  public $a;
  public $b;
  public $c;
  public $d;

  public function OtherClass(){

  	$this-> a = "a";
  	echo $this->a;
  	if($i < (count($a) -1)){ // Условие для разделения.
      echo ", ";
    }
  	$this-> b = "b";
  	echo $this->b;
  	if($i < (count($b) -1)){ // Условие для разделения.
      echo ", ";
    }
  	$this-> c = "c";
  	echo $this->c;
  	if($i < (count($c) -1)){ // Условие для разделения.
      echo ", ";
    }
  	$this-> d = "d";
  	echo $this->d;
  	if($i < (count($d) -1)){ // Условие для разделения.
      echo ", ";
    }

  }
}

$OtherClass1 = new OtherClass(); //Экземпляр класса
//var_dump($OtherClass1 instanceof OtherClass);

?>
