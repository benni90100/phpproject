<?php

use LDAP\Result;

function mostraFile($path)
{
    if (file_exists($path) && is_dir($path)) {
        $result = scandir($path);
        $files = array_diff($result, array('.', '..')); // remove "
        #print_r($file);
        if (count($files) > 0) {
            foreach ($files as $file) {
                if (is_file("$path/$file")) {
                    echo "$path/$file" . '<br>';
                }else if (is_dir("$path/$file")){
                    mostraFile( "$path/$file" );
                }else{
                    echo 'errore';
                }
            }
        } 
        } else {
            echo 'errore';
        }
    }

mostraFile("extra")


?>