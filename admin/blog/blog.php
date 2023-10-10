<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="assets/fav.png">
  <link rel="stylesheet" type="text/css" href="./dist/all-animation.css">
  <link rel="stylesheet" href="./dist/all-animation.min.css">
</head>
<body>
    

<h1>Listagem Blog</h1>


<a style="text-decoration: none; color: white;" href="index.php?p=insertBlog"><div style="display: flex; margin-top: 23px; cursor: pointer; width:205px;">
<button class="Btn">
  
  <div class="sign">+</div>
  
  <div class="text">Blog</div>
</button>
</div></a>


<?php

require_once('listar.php')

?>


<?php

        $pagina = @$_GET['p'];
        
        switch ($pagina) {
          case 'blog':
            require_once('blog/blog.php');
            break;
          case 'insert':
            require_once('blog/inserir.php');
            break;          
        }
      ?>


<script src="./js/bootstrap.min.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="./js/script.js"></script>
</body>
</html>
