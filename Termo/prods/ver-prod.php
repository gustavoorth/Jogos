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

    </head>

    <body>
        <div style="width:1500px;margin-left:auto;margin-right:auto;">
            <h4 class="mb-4">
                <?= $arquivos[$_GET['i']][0] ?>
            </h4>

            <?= nl2br(file_get_contents($arquivos[$_GET['i']][0])); ?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>