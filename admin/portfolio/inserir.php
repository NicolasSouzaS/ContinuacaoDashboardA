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

<?php

if(isset($_POST['statusPortfolio'])){
    
    require_once('class/portfolio.php');

    $statusPortfolio = $_POST['statusPortfolio'];

     $arquivo = $_FILES['inputImg'];

     if($arquivo['error']){
         throw new Exception('Error'. $arquivo['error']);
     }
    
     if(move_uploaded_file($arquivo['tmp_name'], '../img/projetos/' . $arquivo['name'])){
         $imgProjeto = '' . $arquivo['name'];
     }else{
         throw new Exception('Erro não foi possível realizar o upload:');
     }

    $inserir = new PortfolioClass();

    $inserir->statusPortfolio = $statusPortfolio;
    $inserir->imgProjeto = $imgProjeto;
    $inserir->InserirImg();

};

?>

<section style="display: flex;justify-content: space-between; align-items: center;">
    
    <a href="index.php?p=portfolio"><ion-icon style="text-decoration:none; color:white; font-size:30pt; margin-right:-200px;" name="arrow-back-outline"></ion-icon></a>

    <h1 class="container d-flex justify-content-center align-items-center" style="margin-bottom:80px;">Inserção Projeto</h1>

   

</section>

<div class="container-fluid page-height d-flex justify-content-center align-items-center">
    <form action="index.php?p=insertProjeto" method="POST" enctype="multipart/form-data" class="">
        <div class="input__containerPortfolio">
        <img name="imgEscolhida" style="width: 600px; height:400px; border-radius:20px;" id="imgEscolhida" src="./assets/1200px-Item_sem_imagem.svg.png" alt="Imagem Escolhida">
        <input name="inputImg" style="display:none;" type="file" id="inputImg">
        <label for="inputTitulo" class="input__label">Alto descrição</label>
        <input placeholder="Titulo" id="inputTitulo" class="input" name="inputTitulo" type="text">
            
                <label style="margin-left:1%; margin-top:1%; font-size:14pt" class="containerBtn" value="1" name="statusPortfolio">
                    <input value="1" name="statusPortfolio" type="checkbox">
                    <svg viewBox="0 0 64 64" height="2em" width="2em">
                    <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                  </svg>
                Status Projeto</label>
         
            
            <div style="margin-left:15%; margin-top: 0%;">
            <button id="btnLimpar" onclick="Limpar();">Limpar</button>
            <button type="submit">Adicionar</button>
            </div>
        </div>
    </form>
   
</div>


<!-- Adicione os scripts do Bootstrap aqui, se necessário -->
<script src="./js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>

<script>

    document.getElementById("imgEscolhida").addEventListener('click',function(){
        document.getElementById('inputImg').click();
    });

    document.getElementById('inputImg').addEventListener('change',function(){
        let imgEscolhida = document.getElementById('imgEscolhida');
        let arquivo = event.target.files[0];

        if(arquivo){

            let carregar = new FileReader();

            carregar.onload = function(e){
                imgEscolhida.src = e.target.result;
            }
            carregar.readAsDataURL(arquivo);
        }

    });

</script>

</body>
</html>