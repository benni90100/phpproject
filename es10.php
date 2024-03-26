<?php
$str = "ciao sono io";

foreach(str_split($str) as $char){
    if($char == "a" || $char == "e" || $char == "i" || $char == "o" || $char == "u" )
    echo  "$char ";
}
?>