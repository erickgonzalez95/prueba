<?php

 $var = "0";
 $count = 1;
 $count2 = 10;

 //crear punta del arbolito
    
     //Recorre el asterisco y el primer cero a la derecha
     //para empezar a crear el cuerpo del arbol
 for ($l=1; $l <= 22; $l++) { 
    echo "&nbsp;";
    if($l == 22)
       echo "*<br>";
 }
 for ($m=1; $m <= 22; $m++) { 
    echo "&nbsp;";
    if($m == 22)
       echo "0<br>";
 }
//-----------------------------



//crear cuerpo del arbolito
for ($i = 1; $i <= 8; $i++) {
    
    $count++;
    for ($j = $count2--; $j >= 1; $j--) {
        echo "&nbsp;&nbsp;";    
    }
    for ($k = 1; $k <= $i+$count; $k++) {
        echo $var;
    }
    echo "<br>";
}
//-------------------------------


?>