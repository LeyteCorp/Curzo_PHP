<?php
    // los operadores logicos sirven para validar expresiones tales 
    //como el operador or que sirve para validar aun sentencia u otra
    //en el caso del operador and sirve para validar ambas sentencias
    
    $resultado = 50;
    
    if($resultado < 51 and $resultado > 49){
        //echo "es un numero 50 valido";
    }
    
    $edadvalida = 25;
    
        if($edadvalida >  18 and $edadvalida < 26){
            //echo"La edad es valida";
        }

    $sexo = "F";
    $sexo2 = "M";
    
    if($sexo == 'M' or $sexo == 'F'){
        echo"sexo valido";
    }

    if($sexo == 'M' || $sexo == 'F'){
        //echo"sexo valido";
    }
    
    if($sexo == 'M' && $sexo == 'F'){
        //echo"sexo valido";
    }
    
    // operador difernte sirve para validar que un dato no corresponda a la cantidad o caracter 
    $dato=10;
    $dato2=true;
    
    if($dato !=10){
        echo"es un dato bueno";
    }
    
    // la negacion sirve para validar algo que no ocurre =D
      if(!$dato2){
        echo"no es verdadero";
    }
    
?>