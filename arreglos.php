<?php
    // un arreglo es un tipo de dato que puede contener n datos 
    // a partir de un almacenamiento por indice 
    $arreglo = array();
    $arreglo[0]="jan";
    $arreglo[1]=10;
    $arreglo[2]="facultad =D";
    $arreglo[3]="autodidacta ";
    
    // podemos llenar el arreglo dede el inicio o por pocicion
    $arreglo2 = array('jan',1,2,3,4,5);

    //count() sirve para contar los valores que tiene el arreglo 
    for($i=0; $i< count($arreglo2); $i++){
        echo $arreglo2[$i];
        echo "<br>";
        
        if($arreglo2[$i]=='autodidacta '){
            echo "Lo encontraste";
            echo "<br>";
        }
    }
?>