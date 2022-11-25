<?php

$testo = $_GET['testo'];
$censura = str_replace($testo,'', '***');

echo'Caratteri usati: ' . strlen($testo) . '<br>' 
    .'Tuo paragrafo:' .'<br>'
    . ' ' .$testo. '<br>' ;


echo'Caratteri usati: ' . strlen($testo) . '<br>' 
.'Tuo paragrafo:' .'<br>'
. ' ' .$censura. ' ' ;
?>