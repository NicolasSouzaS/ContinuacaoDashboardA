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

<?php

if(isset($_POST['tituloBlog'])){
    require_once('class/blog.php');

    $tituloCaixa = $_POST['tituloBlog'];
    $msgCaixa = $_POST['txtArea'];
   

    if($arquivo['error']){
        throw new Exception('Error'. $arquivo['error']);
    }

    if(move_uploaded_file($arquivo['tmp_name'], '../img/Servico' . $arquivo['name'])){
        $iconServico = 'Servico/' . $arquivo['name'];
    }else{
        throw new Exception('Erro não foi possível realizar o upload:');
    }

    $servico = new ServicoClass();

    $servico->$tituloBlocoServico = $tituloBlocoServico;
    $servico->$textoBlocoServico = $textoBlocoServico;
    $servico->$iconServico = $iconServico;

    $servico->Inserir();

}

?>

    
    <form action="index.php?p=insertBlog" class="container-md">
        <div style="height:400px;" class="input__container">
            <label for="tituloBlog" class="input__label">Titulo Blog</label>
            <input placeholder="Titulo" id="inputTitulo" class="input" name="tituloBlog" type="text">

            <label for="textoBlog" class="input__label">Texto Blog</label>
            <textarea style="padding-left:5px; border-radius:20px;" placeholder="Texto" style="border-radius:20px;" name="txtBlog" id="textoBlog" cols="20" rows="5"></textarea>

            
            <label style="margin-left:1%; margin-top:1%;" class="containerBtn">
                    <input type="checkbox">
                    <svg viewBox="0 0 64 64" height="2em" width="2em">
                    <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                  </svg>
                </label>
         

            <div style="margin-left:67%; margin-top: 4%;">
            <button id="btnLimpar" onclick="Limpar();">Limpar</button>
            <button type="submit">Adicionar</button>
            </div>
        </div>
    </form>
</div>

<!-- Adicione os scripts do Bootstrap aqui, se necessário -->
<script src="./js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>