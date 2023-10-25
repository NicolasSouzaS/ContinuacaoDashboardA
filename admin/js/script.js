    var inputTitulo = document.getElementById("inputTitulo");

    var inputIcon = document.getElementById("inputIcon");

    var txtArea = document.getElementById("txtArea");

    function Limpar(){
        
        inputTitulo.value = "";
        inputIcon.value = "";
        txtArea.value = "";
    }

    // SERVIÇO
$(document).ready(function () {
    $('input[name="customRadio"]').change(function () {
        if ($('#ativarServico').is(':checked')) {
            $.ajax({
                url: 'class/servico.php',
                type: 'POST',
                data: {
                    status: 'ativarServico'
                },
                success: function (response) {
                    $('#tabela-servicos tbody').html(response);
                }
            });
        } else if ($('#desativarServico').is(':checked')) {
            $.ajax({
                url: 'class/servico.php',
                type: 'POST',
                data: {
                    status: 'desativarServico'
                },
                success: function (response) {
                    $('#tabela-servicos tbody').html(response);
                }
            });
        }
    });
});

