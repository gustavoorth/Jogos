<?php

$lista = '';

$listaArray = explode(PHP_EOL,$lista);

foreach($listaArray as $string) {
    if (mb_strlen($string, 'utf8') == 5) {
        echo $string,',';
    }
}