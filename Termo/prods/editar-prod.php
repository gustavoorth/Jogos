<?php
include_once('buscar-prods.php');
?>

<!DOCTYPE html>
<html lang="pt-BR" class="light-style layout-menu-fixed" dir="ltr">

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
        Editor txt
    </title>

</head>

<body>
    <div style="width:1500px;margin-left:auto;margin-right:auto;">
        <h4>
            <?= $arquivos[$_GET['i']][0] ?>
        </h4>
        <form id="my-form" method="post" action="escrever-txt.php?nArq=<?=$_GET['i']?>">
            <div class="d-flex">
                <div>
                    <input class="form-check-input" data-check="1" type="checkbox" />
                    <label class="form-check-label">
                        Linha 15
                    </label>
                </div>

                <div class="ms-3">
                    <input class="form-check-input" data-check="2" type="checkbox" />
                    <label class="form-check-label">
                        Linha 25
                    </label>
                </div>
                <div class="ms-3">
                    <input class="form-check-input" data-check="3" type="checkbox" />
                    <label class="form-check-label">
                        Linha 30
                    </label>
                </div>
                <div class="ms-3">
                    <input class="form-check-input" data-check="4" type="checkbox" />
                    <label class="form-check-label">
                        Linha 40
                    </label>
                </div>
                <div class="ms-3">
                    <input class="form-check-input" data-check="5" type="checkbox" />
                    <label class="form-check-label">
                        Linha UP
                    </label>
                </div>
            </div>

            <div class="mb-4 d-none" id='text1'>
                <h5 class="text-nowrap mt-4">Linha 15</h5>
                <textarea class="form-control ms-2" rows='4' name="linha15[txt]"></textarea>
                <div class="d-flex">
                    <div>
                        <input class="form-check-input" type="checkbox" checked name="linha15[cores][preto]" />
                        <label class="form-check-label">
                            Preto
                        </label>
                    </div>

                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha15[cores][cinza]"/>
                        <label class="form-check-label">
                            Cinza
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-none" id='text2'>
                <h5 class="text-nowrap mt-4">Linha 25</h5>
                <textarea class="form-control ms-2" rows='4' name="linha25[txt]"></textarea>
                <div class="d-flex">
                    <div>
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][preto]"/>
                        <label class="form-check-label">
                            Preto
                        </label>
                    </div>

                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][branco]"/>
                        <label class="form-check-label">
                            Branco
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][cinza]"/>
                        <label class="form-check-label">
                            Cinza
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][grafite]"/>
                        <label class="form-check-label">
                            Grafite
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][gf-br]"/>
                        <label class="form-check-label">
                            GF / BR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][gf-pr]"/>
                        <label class="form-check-label">
                            GF / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][lb-br]"/>
                        <label class="form-check-label">
                            LB / BR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][lb-pr]"/>
                        <label class="form-check-label">
                            LB / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][ng-pr]"/>
                        <label class="form-check-label">
                            NG / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][sv-br]"/>
                        <label class="form-check-label">
                            SV / BR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][sv-pr]"/>
                        <label class="form-check-label">
                            SV / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][db-pr]"/>
                        <label class="form-check-label">
                            DB / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha25[cores][ld-pr]"/>
                        <label class="form-check-label">
                            LD / PR
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-none" id='text3'>
                <h5 class="text-nowrap mt-4">Linha 30</h5>
                <textarea class="form-control ms-2" rows='4' name="linha30[txt]"></textarea>
                <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha30[cores][ng-pr]"/>
                        <label class="form-check-label">
                            NG / PR
                        </label>
                    </div>
            </div>
            <div class="mb-4 d-none" id='text4'>
                <h5 class="text-nowrap mt-4">Linha 40</h5>
                <textarea class="form-control ms-2" rows='4' name="linha40[txt]"></textarea>
                <div class="d-flex">
                    <div>
                        <input class="form-check-input" type="checkbox" checked name="linha40[cores][lb-pr]"/>
                        <label class="form-check-label">
                            LB / PR
                        </label>
                    </div>

                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha40[cores][ng-pr]"/>
                        <label class="form-check-label">
                            NG / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha40[cores][sv-pr]"/>
                        <label class="form-check-label">
                            SV / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha40[cores][db-pr]"/>
                        <label class="form-check-label">
                            DB / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linha40[cores][ld-pr]"/>
                        <label class="form-check-label">
                            LD / PR
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-none" id='text5'>
                <h5 class="text-nowrap mt-4">Linha UP</h5>
                <textarea class="form-control ms-2" rows='4' name="linhaup[txt]"></textarea>
                </br>
                <div class="d-flex">
                    <div>
                        <input class="form-check-input" type="checkbox" checked name="linhaup[cores][ng-pr]"/>
                        <label class="form-check-label">
                            NG / PR
                        </label>
                    </div>

                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linhaup[cores][db-pr]"/>
                        <label class="form-check-label">
                            DB / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linhaup[cores][ld-pr]"/>
                        <label class="form-check-label">
                            LD / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linhaup[cores][lb-pr]"/>
                        <label class="form-check-label">
                            LB / PR
                        </label>
                    </div>
                    <div class="ms-3">
                        <input class="form-check-input" type="checkbox" checked name="linhaup[cores][sv-pr]"/>
                        <label class="form-check-label">
                            SV / PR
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Salvar txt</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        const textareas = document.querySelectorAll("textarea");
        for (const textarea of textareas) {
            textarea.oninput = function () {
                textarea.style.height = ""; /* Reset the height*/
                textarea.style.height = textarea.scrollHeight + "px";
            };
        }
        const inputs = document.querySelectorAll('input[data-check]')
        for (const input of inputs) {
            input.addEventListener('change', () => {
                if (input.checked) {
                    let linha = input.getAttribute('data-check')
                    const textarea = document.getElementById('text' + linha)
                    textarea.classList.remove('d-none')
                } else {
                    let linha = input.getAttribute('data-check')
                    const textarea = document.getElementById('text' + linha)
                    textarea.classList.add('d-none')
                }
            })
        }
        const form = document.getElementById('my-form');
        form.addEventListener('submit', (event) => {
            event.preventDefault()
            event.stopPropagation()
            const formData = new FormData(form);
            let count = 0;
            for (const textarea of textareas) {
                const texto = escape(textarea.value)
                textoFormatado = texto.replaceAll('%20', ' ')
                if (texto != '') {
                    formData.set('linhatxt' + count, textoFormatado)
                }
                count++
            }
            form.submit()
        })

    </script>
</body>

</html>