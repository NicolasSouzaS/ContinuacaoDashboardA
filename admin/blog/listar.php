<?php
    require_once('class/blog.php');
    $listaBlog = new BlogClass();
    $listar = $listaBlog->ListarBlog();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="yourpath/all-animation.css" />
</head>
<body>

<div class="a-dance">
    <table id="minha-tabela" class="input__container-blog table table-dark table-borderless">
        <caption style="color:white; text-align:center; font-size:20pt" class="input__container-blog">Conteudo Blog</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>MENSAGEM</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listar as $linha): ?>
            <tr>
                <td><?php echo $linha['idBlog']?></td>
                <td><?php echo $linha['tituloCaixa']?></td>
                <td><?php echo $linha['msgCaixa']?></td>
                <td>
                    <?php
                    if($linha['linkVeja'] == NULL){
                        echo 'SEM LINK';
                    } else {
                        echo $linha['linkVeja'];
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if($linha['statusBlog'] == 1){
                        echo 'ATIVO';
                    } else {
                        // Se statusBlog não for igual a 1
                        echo 'DESATIVADO';
                    }
                    ?>
                </td>
                <td><a href="index.php?p=blog&s=atualizar">ATUALIZAR</a></td>
                <td><a href="index.php?p=blog&s=desativar">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Restante do seu código -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
