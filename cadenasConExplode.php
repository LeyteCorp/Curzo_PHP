<?php
    // explode es una funcion que convierte un string a un arreglo dependiendo de la construccion pedida
    $var="Leyte Peña Victor Jan";
    $fecha = "16-10-2020";
    $datos = explode(" ",$var);
    
    $f=explode("-",$fecha);
    echo "El año de la fecha es: ".$f[2];
    echo "<br>";
    echo "El mes de la fecha es: ".$f[1];
    echo "<br>";
    echo "El dia de la fecha es: ".$f[0];
?>