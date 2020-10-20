<?php
    // es una estroctura de control o repetitiva 
    // que funciona siempre y cuando una condicion sea valida
    
    $condicion = 0;
    
    while($condicion < 10){
        echo "se cumple la condicion :D";
        echo "<br>";
        echo $condicion++;
        echo "<br>";
        // es lo mismo que $condicion = $condicion + 1;
    }
?>