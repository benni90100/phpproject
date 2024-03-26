<?php
$str = "Ciao Come Stai";
foreach (str_split($str) as $char) {
    if (ctype_upper($char)) {
        echo $char;
    }
}
?>