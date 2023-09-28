<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicione os links para os arquivos CSS do Bootstrap aqui -->
    <link href="seucaminho/bootstrap.min.css" rel="stylesheet">
    <title>Formulário Centralizado</title>
    <style>
        /* Estilo personalizado para ajustar a altura da página */
        .page-height {
            height: 60vh; /* 100% da altura da janela visível */
        }
    </style>
</head>
<body>

<h1 style="height: 10%;" class="container-fluid d-flex justify-content-center align-items-center">Inserção de serviço</h1>

<div class="container-fluid page-height d-flex justify-content-center align-items-center">
    <form class="container-md">
        <div class="input__container">
            <label class="input__label">Titulo do serviço</label>
            <input placeholder="Titulo" id="inputTitulo" class="input" name="text" type="text">

            <label class="input__label">Icon Serviço</label>
            <input placeholder="Titulo" id="inputIcon" class="input" name="text" type="file">

            <label class="input__label">Texto bloco serviço</label>
            <textarea style="border-radius:20px;" name="" id="txtArea" cols="20" rows="5"></textarea>

            <div style="margin-left:67%; margin-top: 2%;">
            <button id="btnLimpar" onclick="Limpar();">Limpar</button>
            <button>Adicionar</button>
            </div>
        </div>
    </form>
</div>

<!-- Adicione os scripts do Bootstrap aqui, se necessário -->
<script src="./js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>