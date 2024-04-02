<?php
function upper ( $str){
    $risultato = [];
    foreach ($str as $char) {
        $risultato = strtoupper($char);
    }
    return $risultato;
    }
 
    
echo upper( ["hello world"]);
?>