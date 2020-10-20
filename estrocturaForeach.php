<?php
    // es una estroctura de control iteractiva que usa 
    //llavez o asociaciones de datos como indice

    $arregloColores = array(
        "coche" => "verde",
        "moto" => "roja",
        "avion" => "gris"
    );
                     // as lo combierte 
   foreach($arregloColores as $key){
       echo $key;
       echo "<br>";
   }
    
    // foreach puede leer dichas asociaciones en un objeto con el tipo 
    //de estroctura de control (recorre los arreglos asociativos)
?>