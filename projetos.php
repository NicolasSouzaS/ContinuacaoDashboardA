<?php

 

//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

 

 

$ok = 0;

 

 

if (isset($_POST['email'])) {

 

    //Load Composer's autoloader

    require 'mailer/Exception.php';

    require 'mailer/PHPMailer.php';

    require 'mailer/SMTP.php';

 

    //Create an instance; passing `true` enables exceptions

    $mail = new PHPMailer(true);

 

    try {

        //Server settings

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

        $mail->isSMTP();                                            //Send using SMTP

        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through

        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

        $mail->Username   = 'ascensaodev@smpsitema.com.br';                     //SMTP username

        $mail->Password   = 'Senac@agencia04';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

 

        //Recipients

        $mail->setFrom('ascensaodev@smpsistema.com.br', 'Site Ascensao Dev');

        $mail->addAddress('ascensaodev@gmail.com');     //Add a recipient

 

        //Content

 

        //dados do email

 

        $nome = $_POST['nome'];

        $email = $_POST['email'];

        $tel = $_POST['telefone'];

        $mens = $_POST['objetivo'];

        require_once('admin/class/contato.php');

         $contato = new ContatoClass();

         $contato->nomeContato = $nome;

         $contato->emailContato = $email;

         $contato->telefoneContato = $tel;

         $contato->mensContato = $mens;

 

         date_default_timezone_set('America/Sao_Paulo');

         $contato->dataContato = date('Y-m-d');

         $contato->hora = date ('H:i:s');

 

         

         $contato->InserirContato();

 

 

 

 

        $mail->CharSet = 'UTF-8';

        $mail->isHTML(true);                                  //Set email format to HTML

        $mail->Subject = 'Site Ascensao Dev';

        $mail->Body    = "

   

    Nome: $nome <br>

    Email: $email <br>

    telefone: $tel <br>

    Mensagem: $mens

 

    ";

        $mail->AltBody = "

 

    Nome: $nome <br>

    Email: $email <br>

    telefone: $tel <br>

    Mensagem: $mens

 

";

 

        $mail->send();

        $ok = 1;

        // echo 'Mensagem enviada com sucesso';

    } catch (Exception $e) {

        $ok = 2;

        echo "Erro ao processar os dados, tente mais tarde!!! {$mail->ErrorInfo}";

    }

}

 

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos realizados</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/estilo-portfolio.css">
    <link rel="stylesheet" href="css/estilo2-portfolio.css">
    <link rel="stylesheet" href="css/portfolio.mobile.css">
    

    <!-- efeito aos js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"> </script>
    <script type="text/javascript">
        (function () {
        emailjs.init("c3GTNIIbRU3yA1cef");
        })();
    </script>

</head>

<body class="body-portfolio">
    <div class="back-header">
        <header class="topo site port">
            <div class="logo">
                <h1><img src="img/logo.png" alt="logo"></h1>
            </div>
            <button id="abrir" class="menu-abrir"></button>
            <nav class="menu">
                <button id="fechar" class="menu-fechar"></button>
                <ul>
                    <li><a href="index.php" class="ativo">Home</a></li>
                    <span class="linha"></span>

                    <li><a href="servicos.php">Serviços</a></li>
                    <span class="linha"></span>

                    <li><a href="projetos.html">Portfólio</a></li>
                    <span class="linha"></span>

                    <li><a href="avaliacoes.php">Avaliações</a></li>
                    <span class="linha"></span>

                    <li><a href="index.php#blog">Blog</a></li>
                    <span class="linha"></span>
                </ul>

                <a href="#" class="login-menu">Entrar</a>

            </nav>



            <div class="btnMenu">
                <button>Entrar</button>
            </div>
        </header>



        <main>


            <section class="cabecalho-portfolio">
                <div class="sp-container">
                    <div class="sp-content">
                        <h2 class="frame-1">ASCENSAO DEV</h2>
                        <h2 class="frame-2">AQUI SUA IDEIA SE TORNA REAL</h2>
                        <h2 class="frame-3">COM AS MELHORES
                            FERRAMENTAS
                        </h2>
                        <h2 class="frame-4">E COM O MELHOR PREPARO</h2>
                        <h2 class="frame-5">
                            <span>DECOLE</span>
                            <span>AGORA</span>
                            <span>CONOSCO.</span>
                        </h2>
                    </div>
                </div>
            </section>
    </div>
    <section class="main-portfolio container">
        <h3>Projetos</h3>
        <div data-aos="fade-right" class="parte-cima">
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" width="400" height="284" src="./img/projetos/projeto1.png">
                </a>
            </div>
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" width="400" height="284" src="./img/projetos/projeto2.png">
                </a>
            </div>
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto3.png">
                </a>
            </div>
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto4.png">
                </a>
            </div>
        </div>


        <div data-aos="fade-left" class="parte-baixo">
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto5.png">
                </a>
            </div>
            <div class="projetos-feitos et_pb_gallery_image landscape">
                <a href="javascript:void">
                    <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto6.png">
                </a>
            </div>
            <div>
                <div class="projetos-feitos">
                    <a href="javascript:void">
                        <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto7.png">
                    </a>
                </div>
            </div>
            <div class="projetos-feitos">
                <a href="javascript:void">
                    <img decoding="async" loading="lazy" width="400" height="284" src="./img/projetos/projeto8.png">
                </a>
            </div>
            
        </div>
        
       
        

    </section>

    <section class="tipi">
        <h2 id="projeto-tipi" style="text-align:center; cursor: pointer;">
            Projeto <span style="color: #cb6600; font-weight: bold;"> TIPI</span>
        </h2>
        <div id="projetos" class="tipi-projetos" >
        <div style="margin: 0 auto; margin-top: 50px;" class="projetos-feitos et_pb_gallery_image landscape">
            <a href="javascript:void">
                <img decoding="async" loading="lazy" width="400" height="284" src="./img/projeto-agencia-tipi.png">
            </a>
            <a href="https://ascensaodev.smpsistema.com.br/_anny/tipi/">
            <button style="cursor: pointer;" class="btn" type="button">
                <strong>ANNY</strong>
                <div id="container-stars">
                  <div id="stars"></div>
                </div>
              
                <div id="glow">
                  <div class="circle"></div>
                  <div class="circle"></div>
                </div>
              </button>
            </a>
        </div>
        <div style="margin: 0 auto; margin-top: 50px;" class="projetos-feitos et_pb_gallery_image landscape">
            <a href="javascript:void">
                <img decoding="async" loading="lazy" width="400" height="284" src="./img/projeto-agencia-tipi.png">
            </a>
            <a href="https://ascensaodev.smpsistema.com.br/_guilherme_gomes/">
            <button style="cursor: pointer;" class="btn" type="button">
                <strong>GUILHERME</strong>
                <div id="container-stars">
                  <div id="stars"></div>
                </div>
              
                <div id="glow">
                  <div class="circle"></div>
                  <div class="circle"></div>
                </div>
              </button>
            </a>
        </div>
        <div style="margin: 0 auto; margin-top: 50px;" class="projetos-feitos et_pb_gallery_image landscape">
            <a href="javascript:void">
                <img decoding="async" loading="lazy" width="400" height="284" src="./img/projeto-agencia-tipi.png">
            </a>
            <a href="https://ascensaodev.smpsistema.com.br/_gustavo_sampaio/">
            <button style="cursor: pointer;" class="btn" type="button">
                <strong>GUSTAVO</strong>
                <div id="container-stars">
                  <div id="stars"></div>
                </div>
              
                <div id="glow">
                  <div class="circle"></div>
                  <div class="circle"></div>
                </div>
              </button>
            </a>
        </div>
        <div style="margin: 0 auto; margin-top: 50px;" class="projetos-feitos et_pb_gallery_image landscape">
            <a href="javascript:void">
                <img decoding="async" loading="lazy" width="400" height="284" src="./img/projeto-agencia-tipi.png">
            </a>
            <a style="cursor: pointer ;" href="https://ascensaodev.smpsistema.com.br/_nicolas_souza/agencia-tipi/">
            <button style="cursor: pointer;" class="btn" type="button">
                <strong>NICOLAS</strong>
                <div id="container-stars">
                  <div id="stars"></div>
                </div>
              
                <div id="glow">
                  <div class="circle"></div>
                  <div class="circle"></div>
                </div>

              </button>
            </a>
        </div>
    </div>
    </section>

    
    <section style="margin:0 auto;" id="formulario" data-aos="fade-up" class="formulario">
        <h2>Desejá começar um trabalho conosco ?</h2>
        <p>Preencha os campos abaixo e entraremos em contato</p>
        <form action="#" method="POST" id="form-contato">
        <div style="margin: 0 auto; margin-top:50px" class="formulario-caixas">
            <input type="text" id="nome" placeholder="Nome">
            <input type="email" id="email" placeholder="Email">
            <input type="tel" id="telefone" placeholder="Telefone">
            <input type="text" id="objetivo" placeholder="Objetivo conosco">
        </div>
        <button type="submit" onclick="" id="solicitacao">
            Solicitar
        </button>

        <?php
        if ($ok == 1) {

            echo $nome . ", sua mensagem foi enviada com sucesso!!!";

        } elseif ($ok == 2) {

            echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde!!!";

        }
        ?>

    </form>
        <div class="redes-sociais">
            <img src="img/youtube.png" alt="Youtube">
            <img src="img/instagram.png" alt="Instagram">
            <img src="img/github (3).png" alt="Git Hub" href="https://github.com/ascensaodev">
            <div class="qrCode">
            <img id="qrCode" src="img/9a8f6d42f8162c7b1d8925bf3ddc2e94.png" alt="Qr 
            Code">
            </div>
        </div>
    </section>

    </main>


    <section data-aos="fade-up" data-aos-duration="2000" class="rodape">
        <footer>
            <div class="cont-roda">

                <div class="caixaRodape1">
                    <img src="img/logo 2.svg" alt="Logo no rodapé">
                    <p>"A presença online que sua empresa merece - criando e gerenciando websites de sucesso!"</p>
                    <h2>© Ascensaodev 2023</h2>
                </div>
                <div class="caixaRodape2">

                    <div>
                        <h2>Trabalhos</h2>
                        <ul id="linksRoda">
                            <a href="#">Blog</a>
                            <a href="#">Como trabalhamos</a>
                            <a href="#">Avaliações</a>
                        </ul>
                    </div>

                    <div>
                        <h2>Serviços</h2>
                        <ul id="linksRoda">
                            <a href="#">Estratégia de Marketing</a>
                            <a href="#">Otimização de Websites</a>
                            <a href="#">E-mail Marketing</a>
                        </ul>
                    </div>

                    <div>
                        <h2>Solução de negócio</h2>
                        <ul id="linksRoda">
                            <a href="#">Parcerias</a>
                            <a href="#">Sobre a ascensaodev</a>
                            <a href="#">Corporação</a>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>
    </section>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


    <!-- slick animator-->
    <script src="js/slick.js"></script>

    <!-- escrita animada em js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- script local -->
    <script src="js/script-portfolio.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/portfolio.js"></script>

</body>

</html>