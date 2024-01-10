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
    <div style="width: 1250px; margin-left:auto; margin-right:auto; margin-top:5rem;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ARQUIVO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $countarquivos = count($arquivos);
                for ($i = 0; $countarquivos > $i; $i++) {
                    if ($arquivos[$i][1] != 0) {
                        echo
                            '<tr class="table-success">
                        <th>' . $arquivos[$i][0] . '</th>
                        <td><a href="editar-prod.php?i=' . $i . '" class="btn btn-primary">Editar</a><a href="ver-prod.php?i=' . $i . '" class="btn btn-secondary ms-1">Ver</a></td>
                    </tr>';
                    } else {
                        echo
                            '<tr>
                        <th>' . $arquivos[$i][0] . '</th>
                        <td><a href="editar-prod.php?i=' . $i . '" class="btn btn-primary">Editar</a></td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
</body>

</html>