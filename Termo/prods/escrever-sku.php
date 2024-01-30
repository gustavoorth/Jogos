<?php
include_once('buscar-prods.php');
$codigo = $_POST['txt'];
$arquivo = $arquivos[$_GET['i']][0];
$output = strtok(file_get_contents($arquivo), '==============');
$output .= "==============\n\n$codigo";

file_put_contents($arquivo, $output);

header("location: tabela.php?nomescroll=$arquivo");