<?php

require_once ('/Some/OtherClass/OtherClass.php');  // Подключаем внешний файл единожды.

class Someclass extends OtherClass { // Наследуем класс

public $e;
public $f;
public $g;

 public function Someclass() {
 	$this-> e = "e";
  	echo $this->e;
  	if($i < (count($e) -1)){ // Условие для разделения.
      echo ", ";
    }
    $this-> f = "f";
  	echo $this->f;
  	if($i < (count($f) -1)){ // Условие для разделения.
      echo ", ";
    }
    $this-> g = "g";
  	echo $this->g;
  	if($i < (count($g) -1)){ // Условие для разделения.
      echo ", ";
    }
         
    }
}

    $Someclass1 = new Someclass();//Экземпляр класса
    //var_dump($Someclass1 instanceof Someclass);

?>
