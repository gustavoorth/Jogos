<?php
include_once('buscar-prods.php');
$textoFinal = '';
$nArq = $_GET['nArq'];
$i = 0;
foreach ($_POST as $linha) {
    if ($linha['txt'] != null) {
        $txt = str_replace('%09', '    ', str_replace('%20', ' ', rawurlencode($linha['txt'])));
        $array = explode('%0A', $txt);
        $novoArray = [];
        foreach ($array as $item) {
            if ($item != '%0D') {
                $novoArray[] = str_replace('%0D', '', $item);
            }
        }
        switch ($i) {
            case 0:
                $textoFinal .= 'M15 - ';
                break;
            case 1:
                $textoFinal .= 'M25 - ';
                break;
            case 2:
                $textoFinal .= 'M30 - ';
                break;
            case 3:
                $textoFinal .= 'M40 - ';
                break;
            case 4:
                $textoFinal .= 'UP - ';
                break;
        }
        foreach ($linha['cores'] as $key => $cor) {
            $textoFinal .= strtoupper($key) . ' | ';
        }
        $textoFinal .= "\r\n\r\n";
        $txtLinhaUrl = urlencode($linha['txt']);
        $medidas = explode('%0A', $txtLinhaUrl);
        foreach ($medidas as $medida) {
            $medidaFormatada = str_replace('%09', ' ', str_replace('%0D', '', $medida));
            if (mb_strlen($medidaFormatada) > 3) {
                $textoFinal .= str_replace('-', '.', str_replace('+', ' ', $medidaFormatada)) . "\r\n\r\n"; // Use "\r\n" for line breaks
            }
        }
        $textoFinal .= "\r\n";
    }
    $i++;
}

file_put_contents($arquivos[$nArq][0], $textoFinal);

header('location: tabela.php');
?>