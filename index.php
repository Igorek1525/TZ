<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Задаем кодировку-->

<?php

require_once ('link.php');  // Подключаем внешний файл единожды. Выполняем в нем первую часть цыклов.

//Выполняем обратный порядок вывода елементов.

  foreach (range (b, a) as $letter) { //Диапазон символов для цыкла.
	echo $letter;
	}
	 if($i == (count($letter) -1)){ // Условие для разделения.
      echo ", ";
}
  foreach (range (a,a) as $letter) { //Диапазон символов для цыкла.
	echo $letter;
}
  foreach (range (a,a) as $letter) { //Диапазон символов для цыкла.
	echo $letter;
}
     if($i == (count($letter) -1)){ // Условие для разделения.
      echo ", ";
    }
foreach (range(g, a) as $letter) { //Диапазон символов для цыкла.
	echo $letter;

	 if($i == (count($letter) -1)){ // Условие для разделения.
      echo ", ";
    }
}
      echo "<br>";  //<!--Делаем преход на след строку-->

      echo "<br>"; // <!--Делаем преход на след строку-->


?>

<!--Конец процедурной части-->

<?php

require_once ('/Some/SomeClass.php'); // Подключаем внешний файл единожды.

require_once ('/Some/OtherClass/OtherClass.php'); // Подключаем внешний файл единожды.

class Main extends SomeClass { // Наследуем класс

	public $aa = "aa";//Создаем переменые
	Public $ab = "ab";//Создаем переменые
	public $ba = "ba";//Создаем переменые

	public function Main() {

	$this-> aa = "aa";
  	echo $this->aa;
  	if($i < (count($aa) -1)){ // Условие для разделения.
      echo ", ";
    }
    $this-> ab = "ab";
  	echo $this->ab;

  	if($i < (count($ab) -1)){ // Условие для разделения.
      echo ". ";
    }
  	
      echo "<br>";
      echo "<br>";

    $this-> ba - "ba";
    echo $this->ba;
    if($i < (count($ba) -1)){
 	echo ", ";
 }
    echo $this->aa;
    if($i < (count($aa) -1)){ // Условие для разделения.
      echo ", ";
    }

    $Arr = array("a", "b", "c", "d","e","f","g");//Обратные ввыводим.
    rsort($Arr);
    foreach ($Arr as $key) {
    echo "$key";
    if($i < (count($aa) -1)){ // Условие для разделения.
      echo ", ";
    }

}
           

}
        }

$Main1 = new Main();
//var_dump($Main1 instanceof Main);


?>

<br>
<br>

<!--через масив, хотя и до этого он бил :)-->
<?php

$A = array("a","b","c","d","e","f","g"); //наш масив

$B = implode(", ", $A); // Делим масив при виводе

echo "$B"; // Виводим разделений масив

echo ", ";  // Выводим запятую
echo $A[0]; // Выводим елемент из масив
echo $A[0]; // и еще раз
echo ", ";  // Снова запятая
echo $A[0];  
echo $A[1];
echo "<br>"; // Отступаем
echo "<br>";

echo $A[1]; // и еще один
echo $A[0];
echo ", ";

echo $A[0]; // Снова вызываем елемент из масива
echo $A[0];
echo ", ";

foreach (range(g, a) as $v) { //здесь могут бить и цыфры :)) 
	echo $v; // выводим наш масивчик

	 if($i == (count($v) -1)){ // Условие для разделения. Что бы красиво :)
      echo ", ";
    }
}

?>

<br>
<br>

<!--Тоже самое но с цыфрами-->
<?php

$A = array("1","2","3","4","5","6","7","8","9","10"); //наш масив

$B = implode(", ", $A); // Делим масив при виводе

echo "$B"; // Виводим разделений масив

echo ", ";  // Выводим запятую
echo $A[0]; // Выводим елемент из масив
echo $A[0]; // и еще раз
echo ", ";  // Снова запятая
echo $A[0];  
echo $A[1];
echo "<br>"; // Отступаем
echo "<br>";

echo $A[1]; // и еще один
echo $A[0];
echo ", ";

echo $A[0]; // Снова вызываем елемент из масива
echo $A[0];
echo ", ";


foreach (range(10, 1) as $v) { //здесь могут бить и цыфры :)) 
	echo $v; // выводим наш масивчик

	 if($i == (count($v) -1)){ // Условие для разделения. Что бы красиво :)
      echo ", ";
    }
}

?>

