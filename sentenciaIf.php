<?php
    // la sentenica if sirve para la validacion de sentencias 

    $numero1 = 5;
    $numero2 = 10;

    $numero3 = 20;
    $numero4 = 20;
    
    // variables tipo boolean
    $bandera = true;
    
    // podemos usar el signo de mayor > o menor < para la comparacion de numeros 
    //asi tanbien podemos utilizar mayor o igual >= o menor igual <=
    
    if($numero1 > $numero2){
        echo "Si es mayor";
    }else{
        echo "No es mayor";
    }
    echo"<br>";
    if($bandera){
        echo "verdadero";
    }else{
        echo "Falso";
    }

     echo"<br>";
    if($numero3 == $numero4){
        echo "Es igual";
    }else{
        echo "No es igual";
    }
?>