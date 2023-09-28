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

<a style="text-decoration: none; color: white;" href="index.php?p=insert"><div style="display: flex; margin-top: 23px; cursor: pointer; width:205px;">
          <ion-icon style="font-size: 20pt; margin-right: 5px;" name="add-circle-outline"></ion-icon>
          <a style="text-decoration: none; color: white;" href="index.php?p=insert"><h2 style="font-size: 15pt;">Adicionar Serviço</h2></a>
</div></a>

<?php
require_once('listar.php');
?>

<script src="js/bootstrap.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
