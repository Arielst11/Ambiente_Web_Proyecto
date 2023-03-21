<?php
function validaDatos($variableAValidar){
  
    // valida si es array
    if(is_array($variableAValidar)){
 // si es se verifica si esta vacio
       if(empty($variableAValidar)){
        return false;
       }else{
       return true;
       }
// si no es un arreglo entonces se verifica que no este vacio
    } elseif($variableAValidar == ""){
        return false;
    }else{
        return true;
    }
  
}