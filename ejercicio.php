<?php

 $count = -1;
 $count2 = 10;

 //crear punta del arbolito
    
     //Recorre el asterisco a la derecha
     //para empezar a crear el cuerpo del arbol
     for ($l=1; $l <= 20; $l++) { 
        echo "&nbsp;";
        if($l == 20)
           echo "*<br>";
     }

//-----------------------------



//crear cuerpo del arbolito
for ($i = 1; $i <= 8; $i++) {
    
    $count++;
    for ($j = $count2--; $j >= 1; $j--) {
        echo "&nbsp;&nbsp;";    
    }
    for ($k = 1; $k <= $i+$count; $k++) {
        echo "0";
    }
    echo "<br>";
}
//-------------------------------


?>
