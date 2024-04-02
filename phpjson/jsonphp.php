<?php 
$richiesta = $_POST["data"];
$strJsonFileContent = file_get_contents("$richiesta.json");
$array = json_decode( $strJsonFileContent, true );
//echo "<pre>" . var_export($array[0]['name']['english'], true) . "</pre>";
echo json_encode($array)
?>