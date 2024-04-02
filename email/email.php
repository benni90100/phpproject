<?php
$to = "micelibenedeto800@gmail.com";
$subject = "email di prova";
$message = "prima mail da php";

if (mail( $to , $subject , $message)) {
    echo 'la mail e stata inviata ';

}else{
    echo 'errore invio mail';
}


?>