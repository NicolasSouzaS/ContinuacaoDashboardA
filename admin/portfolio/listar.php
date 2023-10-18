<?php
    require_once('class/portfolio.php');
    $listaServico = new PortfolioClass();
    $listar = $listaServico->ListarImgs();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./dist/all-animation.css">
    <link rel="stylesheet" href="./dist/all-animation.min.css">
</head>
<body>
    


<div class="">

<table class="input__container-blog table table-dark table-borderless a-flip-right">
    <caption style="color:white; text-align:center; font-size:20pt" class="input__container-blog">Conteudo Portfólio</caption>
        <thead>
            <tr>
                <th class="container d-flex justify-content-center align-items-center">ID</th>
                <th>IMG</th>
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($listar as $linha): ?>
            <tr>
                <td class="container d-flex justify-content-center align-items-center"><?php echo $linha['idPortfolio']?></td>
            
                <td>
                   <?php echo $linha['imgProjeto'] ?>
                </td>

                <td><?php if($linha['statusPortfolio'] ==1){
                        echo 'ATIVO';
                    }else{
                        echo 'DESATIVADO';
                    }?></td>

                <td><a href="index.php?p=projetoAtualizar&s=atualizar
                &id=<?php echo $linha['idPortfolio']?>">ATUALIZAR</a></td>
                <td><a href="index.php?p=projetoDesativar&s=desativar&
                id=<?php echo $linha['idPortfolio']?>">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>

</table>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>