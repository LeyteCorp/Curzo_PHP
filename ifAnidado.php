<?php
    // un if aninado es una estroctura de control que permite validar multiples casos a la vez.
    
    $edad=4;

    if($edad <=5){
        echo "es un niño";
    }elseif($edad == 15){
        echo "es un puberto";
    }elseif($edad == 20){
        echo "es un adulto joven";
    }else{
        echo "es un adulto";
    }
?>