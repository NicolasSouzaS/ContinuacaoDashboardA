<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="assets/fav.png">
</head>
<body>
    

<h1>Listagem Servico</h1> 

<a style="text-decoration: none; color: white;" href="index.php?p=insertServico"><div style="display: flex; margin-top: 23px; cursor: pointer; width:205px;">
<button class="Btn">
  
  <div class="sign">+</div>
  
  <div class="text">Serviço</div>
</button>
</div></a>

<?php

        $pagina = @$_GET['b'];
        
        switch ($pagina) {
          case 'insert':
            require_once('servico/inserir.php');
            break;
          default:
          require_once('listar.php') ;    
        }
      ?>

<script src="./js/bootstrap.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="./js/script.js"></script>

</body>
</html>
