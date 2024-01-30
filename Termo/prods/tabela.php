<?php
require_once('buscar-prods.php');
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
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
    0%
  </div>
</div>
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
                for ($i = 0; $i < $countarquivos; $i++) {
                    $arquivo = $arquivos[$i][0];
                    $status = $arquivos[$i][1];
                    $verUrl = "ver-prod.php?i=" . $i;
                    $editarUrl = "editar-prod.php?i=" . $i;
                    $skuUrl = "sku-prod.php?i=" . $i;
                    $SkuTrue = verify_sku($arquivos[$i][0]);

                    if ($status != 0) {
                        ?>
                        <tr <?= ($SkuTrue == true) ? 'class="table-info"' : '' ?>>
                            <th id="<?=$arquivo?>">
                                <?= $arquivo ?>
                            </th>
                            <td>
                                <a href="<?= $verUrl ?>" class="btn btn-primary ms-1">Ver</a>
                                <a href="<?= $editarUrl ?>" class="btn btn-success">Editar</a>
                                <a href="<?= $skuUrl ?>" class="btn btn-secondary">SKU</a>
                            </td>
                        </tr>
                        <?php
                    } else {
                        ?>
                        <tr class="table-danger">
                            <th>
                                <?php echo $arquivo; ?>
                            </th>
                            <td>
                                <a href="<?= $editarUrl ?>" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                        <?php
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
    <script>
    function scrollToElement(nomescroll) {
            var element = document.getElementById(nomescroll);
            if (element) element.scrollIntoView({
            behavior: 'auto',
            block: 'center',
            inline: 'center'
        });
        }

        window.onload = function () {
            var nomescroll = decodeURI(window.location.search.substring(12));
            scrollToElement(nomescroll);
        }
    </script>
    <script>
  var progressBar = document.querySelector('.progress-bar');
  var totalFiles = <?php echo count($arquivos); ?>;
  var processedFiles = document.querySelectorAll('.table-info');
    progressBar.style.width = (processedFiles.length / totalFiles) * 100 + '%';
    progressBar.innerHTML = processedFiles.length + ' / ' + totalFiles;

</script>
</body>

<style>
.progress {
  position: fixed;
  top: 0px;
  left: 0px;
  right: 0px;
  z-index: 9999;
  height: 30px;
}

.progress-bar {
  height: 30px;
  font-size: 16px;
  text-align: center;
  line-height: 30px;
}
</style>

</html>