
<?php

require_once('admin/class/blog.php');
    $listarBlog = new BlogCass();
    $blog = $listarBlog->ListarBlog();
    var_dump($blog);
?>


<!-- aqui esta começando a parte de artigos -->
<section data-aos="zoom-in-up" class="artigos site" id="blog">
    <h3>Novos artigos</h3>
    <h2>Ascensão Dev BLOG</h2>
    <p>Bem-vindo ao blog da nossa agência! Aqui é o lugar onde compartilhamos nossos insights, dicas e tendências do mundo do desenvolvimento web.Queremos ajudar você a estar sempre à frente da concorrência e se destacar na internet. Então, acompanhe nosso blog e fique por dentro de todas as novidades!
    </p>

    <div class="cont-artigos">

        <div class="slide-blog">
            

            <div>
            <h2>Principais Erros a Evitar ao Desenvolver um Site</h2>
            <p>Ao desenvolver um site, é importante evitar cometer erros que possam comprometer sua eficácia e experiência do usuário. Alguns erros comuns incluem: uma estrutura de navegação complexa e confusa, que dificulta a localização de informações; falta de otimização para mecanismos de busca (SEO), o que resulta em baixa visibilidade nos resultados de pesquisa.</p>
            </div>
            
        

        </div>

    </div>
    <div class="btn-artigo">
    <a href="#">Veja todos</a>
    </div>
</section>