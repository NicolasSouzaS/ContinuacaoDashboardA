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
$id = $_GET['id'];
require_once('class/portfolio.php');
$portfolio = new PortfolioClass($id);



if(isset($_POST['statusPortfolio'])){
    
    $statusPortfolio      = $_POST['statusPortfolio'];


    // if(!empty($_FILES['inputIcon']['name'])){

    //     $arquivo = $_FILES['inputIcon'];

    //  if($arquivo['error']){
    //      throw new Exception('Error'. $arquivo['error']);
    //  }
    
    //  if(move_uploaded_file($arquivo['tmp_name'], '../img/Servico' . $arquivo['name'])){
    //      $iconServico = 'Servico/' . $arquivo['name'];
    //  }else{
    //      throw new Exception('Erro não foi possível realizar o upload:');
    //  }
    // }else{
    //     $iconServico = $servico->iconServico;
    // }
   
    $portfolio->statusPortfolio = $statusPortfolio;
    
    $portfolio->Desativar();

};

?>

<section style="display: flex;justify-content: space-between; align-items: center;">
    
    <a href="index.php?p=servico"><ion-icon style="text-decoration:none; color:white; font-size:30pt; margin-right:-200px;" name="arrow-back-outline"></ion-icon></a>

    <h1 class="container d-flex justify-content-center align-items-center">Desativação do projeto: <?php echo $id; ?></h1>

   

</section>

<div class="container-fluid page-height d-flex justify-content-center align-items-center">
    <form action="index.php?p=projetoDesativar&id=<?php echo $portfolio->idPortfolio?>" method="POST" enctype="multipart/form-data" class="container-md">
        <div class="input__containerDesav">
           <h2 class="container d-flex justify-content-center align-items-center">Você tem certeza que deseja desativar este projeto ?</h2>
           <div style="margin-left:5%; margin-top: 10%; width:100%;">
            <a href="index.php?p=portfolio"><button style="margin-right:55%; color:black; background-color:white;" id="btnLimpar">Não</button></a>
            <button name="statusPortfolio" style="color:black; background-color:white;" value="0" type="submit">Sim</button>
            </div>
        </div>
    </form>
   
</div>

<img style="display:none;" id="imgEscolhida" src="./assets/1200px-Item_sem_imagem.svg.png" alt="Imagem Escolhida">
<!-- Adicione os scripts do Bootstrap aqui, se necessário -->
<script src="./js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>

<script>

    document.getElementById("imgEscolhida").addEventListener('click',function(){
        document.getElementById('inputIcon').click();
    });

    document.getElementById('inputIcon').addEventListener('change',function(){
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