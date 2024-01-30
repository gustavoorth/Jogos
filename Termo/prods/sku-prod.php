<?php
include_once('buscar-prods.php');
?>

<!DOCTYPE html>
<html lang="pt-BR" class="light-style layout-menu-fixed" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=0.75, user-scalable=no, minimum-scale=0.5, maximum-scale=0.75" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
        Editor txt
    </title>
    <link rel="stylesheet" data-name="vs/editor/editor.main"
        href="https://unpkg.com/monaco-editor@0.34.0/min/vs/editor/editor.main.css" />

</head>

<body>

    <h4>
        <?= $arquivos[$_GET['i']][0] ?>
    </h4>

    <?php $SkuTrue = verify_sku($arquivos[$_GET['i']][0]);
    $all = file_get_contents($arquivos[$_GET['i']][0]);
    $txtPage = strtok($all, '==============');
    if ($SkuTrue == true) {
        $value = substr(str_replace('§§', "\\n", str_replace('§§§§', "\\n", preg_replace("/\r|\n/", "§", substr($all, strpos($all, "==============") + 14, )))), 2);
    } else {
        $value = "//template!!! \\nvar skuCor = verificar_sku_cor()\\nvar skuLinha = (linha == '40') ? '1' + linha : '1' + linha\\nreturn '336.011.' + skuLinha + '.0' + skuCor;";
    }
    ?>
    <div class="ms-4">
        <?= nl2br($txtPage) ?>
    </div>
    <div id="container" style="width: max; height: 300px; border: 1px solid grey"></div>
    <form id="form" action="escrever-sku.php?i=<?= $_GET['i'] ?>" method="post">
        <button id="btnSubmit" type="submit" class="btn btn-primary mt-3 ms-2 mb-4">Salvar Código</button>
        <INPut type='hidden' id="input" name="txt"></INPut>
    </form>
    <script>
        var require = {
            paths: {
                vs: "https://unpkg.com/monaco-editor@0.34.0/min/vs",
            },
        };
    </script>
    <script src="https://unpkg.com/monaco-editor@0.34.0/min/vs/loader.js"></script>
    <script src="https://unpkg.com/monaco-editor@0.34.0/min/vs/editor/editor.main.nls.js"></script>
    <script src="https://unpkg.com/monaco-editor@0.34.0/min/vs/editor/editor.main.js"></script>
    <script> editor = monaco.editor.create(document.getElementById("container"), {
            value: ["<?= $value ?>"].join("\n"),
            language: "javascript",
            fontSize: 20,
        });
        monaco.editor.setTheme("vs-dark");</script>

    <script>
        const form = document.getElementById('form');
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            document.getElementById('input').value = editor.getValue();
            form.submit()
        })

    </script>
</body>

</html>