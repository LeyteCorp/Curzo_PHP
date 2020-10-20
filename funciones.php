<?php
    // funcion normal de php
    function mifuncion(){
        // mostar un  nombre
        //return 'Este es un nombre';
            
        $r=array(1);
        return $r;
    }
    //funciones escalares
    function mifuncion2($valorA, $valorB,$opcion){
        switch($opcion){
            case 'suma': 
                    return $valorA + $valorB;
                break;
            
            case 'resta': 
                    return $valorA - $valorB;
                break;
                
            case 'multiplicacion': 
                    return $valorA * $valorB;
                break;
            
            case 'divicion': 
                    return $valorA / $valorB;
                break;
                
            default:
                
                break;
        }
    }
   echo mifuncion2(5,10,'multiplicacion');
?>