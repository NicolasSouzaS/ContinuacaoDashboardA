<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicione os links para os arquivos CSS do Bootstrap aqui -->
    <title>Formulário Centralizado</title>
    <style>
        /* Estilo personalizado para ajustar a altura da página */
        .page-height {
            height: 60vh; /* 100% da altura da janela visível */
        }
    </style>
</head>
<body>

<section style="display: flex;justify-content: space-between; align-items: center;">
    
    <a href="index.php?p=blog"><ion-icon style="text-decoration:none; color:white; font-size:30pt; margin-right:-200px;" name="arrow-back-outline"></ion-icon></a>

    <h1 class="container d-flex justify-content-center align-items-center">Inserção Blog</h1>

   

</section>

<div class="container-fluid page-height d-flex justify-content-center align-items-center">
    
    <form action="javascript:void" class="container-md">
        <div style="height:400px;" class="input__container">
            <label class="input__label">Titulo Blog</label>
            <input placeholder="Titulo" id="inputTitulo" class="input" name="txtTitulo" type="text">

            <label class="input__label">Texto Blog</label>
            <textarea style="padding-left:5px; border-radius:20px;" placeholder="Texto" style="border-radius:20px;" name="txtBlog" id="txtArea" cols="20" rows="5"></textarea>

            <div style="margin-left:67%; margin-top: 4%;">
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