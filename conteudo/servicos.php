
<?php

require_once('admin/class/servico.php');
    $listaServico = new ServicoClass();
    $listar = $listaServico->ListarStatusOn();
    // var_dump($listar);
?>

<section data-aos="fade-up" data-aos-duration="1000">
        <div class="servicos site">
            <h2>Nossos Serviços</h2>
            <p>A nossa agência oferece uma ampla variedade de serviços para ajudar empresas a alcançar o sucesso online. Com uma equipe de profissionais altamente capacitados e experientes, nós trabalhamos com você para desenvolver soluções digitais personalizadas que atendam às suas necessidades específicas.</p>
        
        </div>

    

        <!-- aqui esta a parte de serviços que nos prestamos -->
       
            <div class="cont-servicos site">
            <?php foreach($listar as $linha): ?>
                <div>
                    <i class="fa-solid fa-newspaper"></i>
                    <h2><?php echo $linha['tituloBlocoServico']?></h2>
                    <p><?php echo $linha['textoBlocoServico']?></p>
                    <a href="#" id="btnServ">Saiba mais...</a>
                </div>
                <?php endforeach ?>
            </div>
        </section>