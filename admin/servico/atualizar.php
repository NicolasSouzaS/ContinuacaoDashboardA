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
require_once('class/servico.php');
$servico = new ServicoClass($id);



if(isset($_POST['inputTitulo'])){
    
    

    $tituloBlocoServico = $_POST['inputTitulo'];
    $textoBlocoServico  = $_POST['txtArea'];
    $iconServico        = $_POST['inputIcon'];
    $statusServico      = $_POST['statusServico'];


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
    $servico->tituloBlocoServico = $tituloBlocoServico;
    $servico->textoBlocoServico = $textoBlocoServico;
    $servico->iconServico = $iconServico;
    $servico->statusServico = $statusServico;
    
    $servico->Atualizar();

};

?>

<section style="display: flex;justify-content: space-between; align-items: center;">
    
    <a href="index.php?p=servico"><ion-icon style="text-decoration:none; color:white; font-size:30pt; margin-right:-200px;" name="arrow-back-outline"></ion-icon></a>

    <h1 class="container d-flex justify-content-center align-items-center">Atualização do serviço: <?php echo $id; ?></h1>

   

</section>

<div class="container-fluid page-height d-flex justify-content-center align-items-center">
    <form action="index.php?p=servicoAtualizar&id=<?php echo $servico->idServico?>" method="POST" enctype="multipart/form-data" class="container-md">
        <div class="input__container">
            <label for="inputTitulo" class="input__label">Titulo do serviço</label>
            <input placeholder="Titulo" id="inputTitulo" class="input" name="inputTitulo" type="text" value="<?php echo $servico->tituloBlocoServico ?>">

            <label for="inputIcon" class="input__label">Icon Serviço </label>
            <input placeholder="<?php if($servico->iconServico == NULL){echo 'Este serviço não possui icone';} ?>" id="inputIcon" class="input" name="inputIcon" type="text" value="<?php echo $servico->iconServico ?>">

            <label for="txtArea" class="input__label">Texto bloco serviço</label>
            <textarea style="padding-left:5px; border-radius:20px;" placeholder="Texto" style="border-radius:20px;" name="txtArea" id="txtArea" cols="20" rows="5"><?php echo $servico->textoBlocoServico?></textarea>
            
            
            
                <label style="margin-left:1%; margin-top:1%;" class="containerBtn" value="1" name="statusServico">
                <input type="hidden" name="statusServico" value="1">
    
                    <label style="margin-top: 1%; width:200px;" class="containerBtn" name="statusServico">
                        <input name="statusServico" type="checkbox" checked="checked" disabled>
                        <svg viewBox="0 0 64 64" height="2em" width="2em">
                            <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                        </svg>
                       <span style="margin-left:5%;">Status Servico</span>
                    </label>
         
            
            <div style="margin-left:84%; margin-top: 2%;">
            <button type="submit">Atualizar</button>
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