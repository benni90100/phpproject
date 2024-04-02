<?php
$nomeCartella = 'nuovacartella';
$nomefile = 'note.txt';
$nuovoFile = $nomeCartella . '/' . $nomefile;
if(file_exists($nomefile)){

    if (copy($nomefile, $nuovoFile)) {
        echo 'file copiato';
    }else{
        echo 'file non copiao';
    }

}else{
    echo 'il file esiste';
}


?>