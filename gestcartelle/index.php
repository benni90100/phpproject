<?php
$files = glob('extra/*.txt');

foreach($files as $file){
    echo basename($file) . "size: " .  filesize($file) . "<br>";    
}

?>